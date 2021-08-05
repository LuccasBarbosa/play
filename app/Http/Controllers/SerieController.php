<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Admin;
use App\Personagem;
use App\Episodio;
use App\Serie;
use Builder;
use Date;

use Validator;

class SerieController extends Controller
{

    public function __construct()
    {
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 

        $serie = Serie::all();
        $episodio = Episodio::all();
        $personagem = Personagem::all();
        return view('admin.serie.index', compact(['serie','episodio','personagem']));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serie = Serie::all();
        $personagem = Personagem::all();

        return view('admin.serie.criar', compact(['serie','personagem']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $episodio = new Serie;
        $episodio->serie = $request->serie;
        $episodio->texto = $request->texto;
        $episodio->eixo = $request->eixo;
        $episodio->capa = $request->capa;
        $episodio->id_personagem = $request->id_personagem;

        $path = $request->file('capa')->store('imagens', 'public');
        $episodio->capa = $path; 

        $episodio->save();


        return redirect()->route('serie.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $episodio = Episodio::find($id); 
        $personagem = Personagem::find($id); 
        $serie = Serie::find($id);
        
        
        if (isset($serie)) {
            
            return view('admin.serie.editar', compact(['episodio', 'personagem', 'serie']));
        }

        return view('admin.serie.editar');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $serie = Serie::find($id); 

        if (isset($serie)) {
            
            
            $serie->serie = $request->input('serie');
            $serie->texto = $request->input('texto');
            $serie->eixo = $request->input('eixo');
            $serie->id_personagem = $request->input('id_personagem');

            if ($request->file('capa') == null) {
                $file = "nada";
            }else{
                $path = $request->file('capa')->store('imagens', 'public');
                $serie->foto = $path;  
            }

            

            $serie->save();

        } 

        return redirect()
                    ->route('admin.dashboard')
                    ->with('success', 'Admin atualizada com sucesso!');

        // Redireciona de volta com uma mensagem de erro
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao atualizar');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Serie::find($id); 

        if(isset($serie)){
            $serie->delete();
            return redirect()->route('serie.index');
        }

        return redirect()->route('admin.dashboard');

    }

    
}
