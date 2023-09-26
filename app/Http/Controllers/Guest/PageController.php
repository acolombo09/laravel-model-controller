<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller{
    public function index() {

        // questo funge da select * from movies
        // Crea un istanza per dato nel db, ogni istanza è una riga nel db
        $movies = Movie::all();


        return view("home", ["movies" => $movies]);
    }
}
