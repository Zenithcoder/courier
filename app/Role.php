<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    public function user()
    {
     return $this->belongsToMany(User::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}
