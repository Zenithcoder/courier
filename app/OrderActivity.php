<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class OrderActivity extends Model
{
    protected $appends = ["transit_duration"];

     protected $fillable = ['order_id' , 'description' , 'current_location', 'current_lga_id', 'next_location' , 'next_lga_id', 'expected_delivery_date'];


    public function getTransitDurationAttribute() {
        return Carbon::parse($this->attributes["expected_delivery_date"])->diffForHumans();
    }
    public function order() {
        return $this->belongsTo(Order::class);
    }

     public function current_lga(){
        return $this->belongsTo(Lga::class, 'current_lga_id');
    }

    public function next_lga(){
        return $this->belongsTo(Lga::class, 'next_lga_id');
    }

   
}
