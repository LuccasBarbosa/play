<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Admin;
use App\Personagem;
use App\Episodio;
use Builder;
use Date;

class EpisodioController extends Controller
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
 

        return view('admin.episodio.index');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personagem = Personagem::all();
        return view('admin.episodio.criar', compact('personagem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $episodio = new Episodio;
        $episodio->bimestre = $request->bimestre;
        $episodio->texto = $request->texto;
        $episodio->url_jogo = $request->url_jogo;
        $episodio->eixo = $request->eixo;

        $episodio->id_personagem = $request->id_personagem;

        $path = $request->file('foto')->store('imagens', 'public');
        $episodio->foto = $path; 

        $episodio->save();


        return redirect()->route('admin.dashboard');
        

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

        
        if (isset($episodio)) {
            
            return view('admin.episodio.editar', compact(['episodio', 'personagem']));
        }

        return view('admin.episodio.editar');

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
        $episodio = Episodio::find($id); 

        if (isset($episodio)) {
            
            $episodio->bimestre = $request->input('bimestre');
            $episodio->texto = $request->input('texto');
            $episodio->id_personagem = $request->input('id_personagem');
            $episodio->url_jogo = $request->input('url_jogo');
            $episodio->eixo = $request->input('eixo');

            if ($request->file('foto') == null) {
                $file = "nada";
            }else{
                $path = $request->file('foto')->store('imagens', 'public');
                $episodio->foto = $path;  
            }

            

            $episodio->save();

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
        $episodio = Episodio::find($id); 

        if(isset($episodio)){
            $episodio->delete();
            return redirect('/admin/dashboard');
        }

        return redirect('/admin/dashboard');
    }

    
}
