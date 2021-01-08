<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() {
        // GET COMICS LIST
        $comics = config('dc-database');
        $comic = [];

        foreach ($comics as $key => $comic) {
            $slug = Str::slug($comic['title'] , '-');

            $comics[$key]['slug'] = $slug;
        }

        // dd($comics);
        return view('home' , compact('comics'));
    }
}
