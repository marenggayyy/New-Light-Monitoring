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
        Schema::create('member_relationships', function (Blueprint $table) {
            $table->id();

            $table->foreignId('member_id')->constrained()->cascadeOnDelete();

            $table->foreignId('related_member_id')->constrained('members')->cascadeOnDelete();

            $table->enum('relationship_type', ['invited_by', 'consolidator', 'leader', 'primary_under', 'delegate_to']);

            $table->boolean('is_active')->default(true);

            $table->date('start_date')->nullable();

            $table->date('end_date')->nullable();

            $table->text('remarks')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_relationships');
    }
};
