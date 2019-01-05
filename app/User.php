<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_num','address','lga_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customer_orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    public function rider_orders()
    {
        return $this->hasMany(Order::class, 'rider_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function scopeAdmin($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->whereName('admin');
        });
    }

    public function scopeCustomer($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->whereName('customer');
        });
    }

    public function scopeRider($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->whereName('rider');
        });
    }

    /**
     * @param string
     * ring|array $roles
     * @return bool
     */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
    }

    /**
     * Check multiple roles
     * @param array $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**
     * Check one role
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

}
