<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->foreignId('event_session_id')->nullable()->constrained('event_sessions')->nullOnDelete();
            $table->foreignId('group_id')->nullable()->constrained()->nullOnDelete();
            $table->date('attendance_date');
            $table->enum('attendance_type', ['member', 'headcount'])->default('member');
            $table->unsignedInteger('headcount')->nullable();
            $table->foreignId('taken_by')->constrained('users')->cascadeOnDelete();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
