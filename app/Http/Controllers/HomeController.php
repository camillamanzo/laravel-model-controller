<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        $data = [
            "movies" => $movies
        ];
        return view('home', $data);
    }
}
