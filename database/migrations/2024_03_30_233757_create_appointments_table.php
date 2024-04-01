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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('appointment_type')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('appointment_date');
            $table->mediumText('reason')->nullable();
            $table->tinyText('address')->nullable();
            $table->string('appointment_time');
            $table->boolean('active')->default(false);
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
