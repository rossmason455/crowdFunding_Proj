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
        Schema::create('transactions', function (Blueprint $table) {
            
 $table->id();
 $table->decimal('amount', 10, 2);
 $table->string('stripe_transaction_id');
 $table->enum('payment_status', ['pending', 'completed', 'failed']);
 $table->string('stripe_payment_method_id')->nullable(); 
 $table->string('stripe_payment_intent_id')->nullable();
 $table->foreignId('campaign_id')->constrained('campaigns')->onDelete('cascade');
 $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
 $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
