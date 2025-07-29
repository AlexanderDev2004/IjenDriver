<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'm_users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'role_id',
        'name',
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(RoleModel::class, 'role_id', 'role_id');
    }
}
