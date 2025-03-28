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
        Schema::table('campaigns', function (Blueprint $table) {
            $table->enum('category', [   'Funding', 'Marketing', 'Research', 'Development', 'Education',
            'Technology', 'Healthcare', 'Non-profit', 'Art & Culture', 'Environment',
            'Social Impact', 'Innovation', 'Startups', 'Sports', 'Fashion',
            'Food & Beverage', 'Travel', 'Entertainment', 'Real Estate', 'Financial Services'])->default('Funding');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
