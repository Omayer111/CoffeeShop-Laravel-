<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController
{
    public function index()
    {
        $bmenus = DB::table('Bmenus')->get();
        $cmenus = DB::table('Cmenus')->get();
        $chefs = DB::table('chefs')->get();
        return view('index', compact('bmenus', 'cmenus', 'chefs'));
    }
}