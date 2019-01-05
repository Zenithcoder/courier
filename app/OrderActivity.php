<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class OrderActivity extends Model
{
    protected $appends = ["transit_duration"];

    public function getTransitDurationAttribute() {
        return Carbon::parse($this->attributes["expected_delivery_date"])->diffForHumans();
    }
    public function order() {
        return $this->belongsTo(Order::class);
    }
}
