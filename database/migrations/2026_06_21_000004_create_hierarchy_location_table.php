<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hierarchy_location', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hierarchy_id')->constrained()->cascadeOnDelete();
            $table->foreignId('location_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->unique(['hierarchy_id', 'location_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hierarchy_location');
    }
};
