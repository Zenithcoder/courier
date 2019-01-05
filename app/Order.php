<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'pickup_address', 'pickup_lga_id', 'drop_off_address', 'drop_off_lga_id', 'description', 'recipient_name', 'recipient_phone_number'
    ];

    static function boot()
    {
        static::creating(function ($order) {
            $order->tracking_number = static::generateUniqueTrackingNumber();
        });

        parent::boot(); // TODO: Change the autogenerated stub
    }


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

    public function order_activities(){
        return $this->hasMany(OrderActivity::class);
    }

    public function scopePending($query) {
        return $query->whereStatus('PENDING');

    }

    public function scopeEnRoute($query) {
        return $query->whereStatus('EN_ROUTE');
    }

    public function scopeDelivered($query) {
        return $query->whereStatus('DELIVERED');
    }

    public function scopeCancelled($query) {
        return $query->whereStatus('CANCELLED');
    }

    public function isPending() {
        return $this->status == 'PENDING';
    }

    public function isEnRoute() {
        return $this->status == 'EN_ROUTE';
    }

    public function isDelivered() {
        return $this->status == 'DELIVERED';
    }

    public function isCancelled() {
        return $this->status == 'CANCELLED';
    }

    private static function generateUniqueTrackingNumber() {
        do {

            $tracking_number = str_random(15);
        } while(static::whereTrackingNumber($tracking_number)->exists());

        return $tracking_number;
    }
}
