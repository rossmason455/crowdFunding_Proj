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
        Schema::create('campaigns', function (Blueprint $table) {
           
     $table->id();
     $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
     $table->string('title');
     $table->text('description')->nullable();
     $table->integer('progress')->default(0);
     $table->text('solution')->nullable();
     $table->date('start_date')->nullable();
     $table->date('end_date')->nullable();
     $table->text('competitive_landscape')->nullable();
     $table->text('team')->nullable();
     $table->text('use_of_funds')->nullable();
     $table->enum('campaign_type', ['crowdfunding', 'angel_investment']);
     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
