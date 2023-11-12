<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function home(){
        $movies = Movie::all();

        return view('home',['movies'=>$movies]);
    }

    //model binding
    public function detail(Movie $id){
        return view('detail',['movie'=>$id]);
    }
}
