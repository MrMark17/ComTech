<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function viewpost(){
        $data = DB::select("SELECT * FROM barang");

        return view('view')->with('data', $data);
    }

    public function about(){
        return view('about');
    }
}
