<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//prendo i miei dati dal db
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $movie = Movie::all();
        dump($movie);
        //funzione dump and die
        dd($movie);
        return view('home');
    }
}
