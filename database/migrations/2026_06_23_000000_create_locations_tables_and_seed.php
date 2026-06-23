<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLocationsTablesAndSeed extends Migration
{
    /**
     * Run the migrations.
     * Creates countries, states and local_governments tables and populates them from database/nigeria_lgas.json
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->string('name');
            $table->unique(['country_id', 'name']);
        });

        Schema::create('local_governments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained('states')->onDelete('cascade');
            $table->string('name');
            $table->unique(['state_id', 'name']);
        });

        // Seed the tables from the JSON file placed at database/nigeria_lgas.json
        $path = base_path('database/nigeria_lgas.json');
        if (file_exists($path)) {
            $json = json_decode(file_get_contents($path), true);
            DB::transaction(function () use ($json) {
                // Ensure Nigeria country exists
                $countryId = DB::table('countries')->insertGetId(['name' => 'Nigeria']);

                foreach ($json as $state) {
                    $stateName = trim($state['name']);
                    $stateId = DB::table('states')->insertGetId([
                        'country_id' => $countryId,
                        'name' => $stateName,
                    ]);

                    if (! empty($state['lgas']) && is_array($state['lgas'])) {
                        $insert = [];
                        foreach ($state['lgas'] as $lga) {
                            $insert[] = ['state_id' => $stateId, 'name' => trim($lga)];
                        }
                        if (! empty($insert)) {
                            DB::table('local_governments')->insert($insert);
                        }
                    }
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local_governments');
        Schema::dropIfExists('states');
        Schema::dropIfExists('countries');
    }
}
