<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'tb_user';
    protected $primary_key = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
