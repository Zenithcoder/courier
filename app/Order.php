<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'pickup', 'dropoff', 'type', 'lga_id','state_id','recipient_name','recipient_phone_num'
    ];

    public function User() {
         return $this->belongsTo(User::class, 'user_id');
     }

     protected function Rider()
     {
         return $this->belongsTo(Rider::class);
     }

    protected function Role()
    {
        return $this->belongsTo(Role::class);
    }
}
