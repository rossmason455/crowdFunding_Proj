<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Transaction extends Model
{

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    protected $fillable = [
        'amount',
        'stripe_transaction_id',
        'payment_status',
        'stripe_payment_method_id',
        'stripe_payment_intent_id',
        'campaign_id',
        'user_id'
    ];




    public function user(){
        return $this->belongsTo(User::class);
    }


    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }




}
