<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'user';
    protected $fillable = ['nama', 'alamat', 'email', 'password'];
}
