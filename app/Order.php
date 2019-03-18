<?php

namespace App;

use App\Custom\Traits\GlobalScopes;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use GlobalScopes;

    protected $fillable = [
        'pickup_address', 'pickup_lga_id', 'drop_off_address', 'drop_off_lga_id', 'description', 'recipient_name', 'recipient_phone_number','amount','status','weight','payment_status','expected_delivery_date'
    ];

    private $filterKeys = ["status", "payment_status", "assigned_status"];

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

    public function scopeFilter($query){
        $columns = request()->only($this->filterKeys);

        $assigned_status = null;
        if($columns["assigned_status"] != null) {
            $assigned_status = $columns["assigned_status"];
        }
        if($columns["status"] === null) $columns["status"] = [];
        if($columns["payment_status"] === null) $columns["payment_status"] = [];

        unset($columns["assigned_status"]);

        foreach($columns as $column => $values){
            $query->where(function ($q) use ($values, $column){
                foreach($values as $value) {
                    $q->orWhere($column, $value);
                }
            });
        }

        switch ($assigned_status) {
            case "ASSIGNED" :
                $query->whereNotNUll("rider_id");
                break;
            case "NOT_ASSIGNED" :
                $query->whereNUll("rider_id");
                break;
        }
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

    public function scopeIsAssigned($query) {
        return $query->whereNotNull('rider_id');
    }

    public function scopeNotAssigned($query) {
        return $query->whereNull('rider_id');
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

    public function getStatusLabelAttribute() {
        switch($this->attributes["status"]) {
            case "PENDING" : $label = "status-error"; break;
            case "EN_ROUTE" : $label = "status-info"; break;
            case "DELIVERED" : $label = "status-success"; break;
            case "CANCELLED" : $label = "status-default"; break;
            default : $label = "status-error"; break;
        }

        return $label;
    }
    public function getPaymentStatusLabelAttribute() {
        switch($this->attributes["payment_status"]) {
            case "FAILED" : return "status-error";
            case "PAID" : return "status-success";
        }
        return "";
    }
}
