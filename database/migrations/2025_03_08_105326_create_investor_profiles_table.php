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
        Schema::create('investor_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('risk_profile', ['low', 'moderate', 'high']);
            $table->decimal('min_investment', 10, 2);
            $table->decimal('max_investment', 10, 2);
            $table->text('investment_preference')->nullable();
            $table->text('investment_approach')->nullable();
            $table->enum('preferred_investment_stage', ['early_stage', 'growth_stage', 'late_stage']);
            $table->text('investment_interest')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investor_profiles');
    }
};
