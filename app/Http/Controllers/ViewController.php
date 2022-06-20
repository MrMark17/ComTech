<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function viewpost()
    {
        $data = [
            'title' => 'View Posts',
            'query' => DB::select("SELECT * FROM barang")
        ];
        return view('view', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('about', $data);
    }
}
