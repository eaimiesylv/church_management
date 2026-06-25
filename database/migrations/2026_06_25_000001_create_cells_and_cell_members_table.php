<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cells', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('cell_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cell_id')->constrained('cells')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['cell_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cell_members');
        Schema::dropIfExists('cells');
    }
};
