<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->unsignedSmallInteger('city')->nullable();
            $table->unsignedSmallInteger('state_id')->nullable();
            $table->string('country_id', 100)->nullable()->default('Nigeria');
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed'])->nullable();
            $table->string('occupation')->nullable();
            $table->enum('membership_status', ['active', 'inactive', 'visitor', 'transfer'])->default('visitor');
            $table->date('membership_date')->nullable();
            $table->date('baptism_date')->nullable();
            $table->date('salvation_date')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone', 20)->nullable();
            $table->boolean('can_login')->default(true);
            $table->text('notes')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // drop in reverse order
            $table->dropColumn([
                'deleted_at',
                'notes',
                'can_login',
                'emergency_contact_phone',
                'emergency_contact_name',
                'salvation_date',
                'baptism_date',
                'membership_date',
                'membership_status',
                'occupation',
                'marital_status',
                'country_id',
                'state_id',
                'city',
                'address',
                'photo',
                'phone',
                'date_of_birth',
                'gender',
                'middle_name',
                'last_name',
                'first_name',
            ]);
        });
    }
};
