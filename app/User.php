<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getRole()
    {
        return $this->hasOneThrough('App\Models\Role', 'App\Models\UserRoleRelation', 'user_id', 'id', 'id', 'role_id');
    }
    /**
     * Check Roles admin here 
     *
     * @var array
     */
    public function isAdmin()
    {
        $role = Role::join('role_user', 'roles.id', '=', 'role_user.role_id')
            ->where('user_id', Auth::user()->id)
            ->first();
        return $role->name == 'admin' ? true : false;
    }
    public function isMerchant()
    {
        $role = Role::join('role_user', 'roles.id', '=', 'role_user.role_id')
            ->where('user_id', Auth::user()->id)
            ->first();
        return $role->name == 'merchant' ? true : false;
    }

    public function isUser()
    {
        $role = Role::join('role_user', 'roles.id', '=', 'role_user.role_id')
            ->where('user_id', Auth::user()->id)
            ->first();
        return $role->name == 'user' ? true : false;
    }
}
