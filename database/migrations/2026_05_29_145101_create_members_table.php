<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            // Basic Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();

            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthday')->nullable();

            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();

            // Address
            $table->string('house_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('barangay')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();

            // Personal
            $table->enum('occupation', ['student', 'worker', 'business_owner', 'unemployed', 'other'])->default('unemployed');

            // Membership Status
            $table->enum('status', ['visitor', 'active', 'inactive'])->default('visitor');

            // Spiritual Journey
            $table->enum('spiritual_status', ['visitor', 'consolidating', 'member', 'encounter', 'post_encounter', 'primary_candidate', 'primary_12', 'leader', 'apprentice'])->default('visitor');

            $table->date('encounter_date')->nullable();
            $table->date('baptism_date')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
