<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function show($slug) {
        $comics = config('dc-database');
        $comic = [];
        
        // SLUG
        foreach ($comics as $item) {
            $titleConverted = Str::slug($item['title'] , '-');

            if ($slug == $titleConverted) {
                $comic = $item;
                break;
            }
        }
        return view('comics.show' , compact('comic'));
    }
}
