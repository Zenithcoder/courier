<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'pickup', 'dropoff', 'type', 'lga_id','state_id','recipient_name','recipient_phone_num'
    ];

    public function user() {
         return $this->belongsTo(User::class, 'user_id');
     }

}
