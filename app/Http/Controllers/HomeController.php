<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Personagem;
use App\Serie;
use App\Episodio;
use App\Question;
use App\Answer;
use Builder;
use Date;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $personagem = Personagem::all();
        $episodios = Episodio::all();
        $serie = Serie::all();
        return view('home', compact(['personagem', 'episodios', 'serie']));
    }

    public function personagens(Request $request, $id)
    {
        $personagem = Personagem::find($id); 
        $episodio = Episodio::where('id_personagem','=', $personagem->id)->get(); 

        return view('personagem', compact(['personagem', 'episodio']));
    }

    public function serie(Request $request, $id)
    {

        $serie = Serie::find($id); 
        $episodio = Episodio::all();
        $personagem = Personagem::find($id); 

        return view('serie', compact(['serie', 'episodio', 'personagem']));
    }

    public function episodio(Request $request, $id)
    {

        $episodio = Episodio::find($id); 
        return view('episodio', compact(['episodio']));
    }

    public function quiz(Request $request, $id)
    {
        $quiz = Question::all(); 
        return view('espisodio', compact(['quiz']));
    }

}
