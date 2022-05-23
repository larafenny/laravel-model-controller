<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//prendo i miei dati dal db
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //funzione dump and die
        //dd($movie);
        return view('movies', compact('movies'));
    }
}
