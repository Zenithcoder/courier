<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'pickup', 'dropoff', 'amount','status', 'type', 'city', 'payment_status', 'assign','user_id','weight'
    ];

    public function user() {
         return $this->belongsTo(User::class, 'user_id');
     }

}
