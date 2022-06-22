<?php

namespace App\Http\Controllers;

class Auth extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('register', $data);
    }
}
