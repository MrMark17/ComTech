<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;
    protected $table = 'user';
    protected $fillable = ['nama', 'alamat', 'email', 'password'];
}
