<?php

namespace App\Http\Controllers;
use App\Films;
use Illuminate\Http\Request;

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

    public function store(Request $request){
        //Validacion formulario
        $validatedData = $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'description' => 'required'
        ]);
        $film = new Films;
        $film->title = $validatedData['title'];
        $film->year = $validatedData['year'];
        $film->description = $validatedData['description'];
        $film->save();
        return redirect('/films');
    }

    public function destroy($id){
        $film = Films::find($id);
        $film->delete();
    }
}
