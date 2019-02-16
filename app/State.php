<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ["name", "capital"];

    public function lgas() {
        return $this->hasMany(Lga::class);
    }
}
