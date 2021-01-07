<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // GET COMICS LIST
        $comics = config('dc-database');
        // dd($comics);
        return view('home' , compact('comics'));
    }
}
