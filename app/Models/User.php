<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primary_key = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}   
