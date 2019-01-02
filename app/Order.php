<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'pickup_address', 'pickup_lga_id', 'drop_off_address', 'drop_off_lga_id', 'description', 'recipient_name', 'recipient_phone_number'
    ];


    public function customer() {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function rider() {
        return $this->belongsTo(User::class, 'rider_id');
    }

    public function pickup_lga(){
        return $this->belongsTo(Lga::class, 'pickup_lga_id');
    }

    public function drop_off_lga(){
        return $this->belongsTo(Lga::class, 'drop_off_lga_id');
    }

}
