<?php

namespace App\Http\Controllers;
use App\Films;


class FilmsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $films = Films::all();
        return view('films.index'
            , compact('films'));
    }

    public function show($id)
    {
        $film = Films::find($id);
        return view('films.show'
            ,compact('film'));
    }

    public function create(){
        return view('films.add');
    }
}
