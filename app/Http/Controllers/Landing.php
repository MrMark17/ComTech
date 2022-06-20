<?php

namespace App\Http\Controllers;

class Landing extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page'
        ];
        return view('landing', $data);
    }
}
