<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Admin;
use App\Personagem;
use App\Serie;
use App\Episodio;
use Builder;
use Date;

use Validator;

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
 

        $episodio = Episodio::all();
        return view('admin.episodio.index', compact('episodio'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personagem = Personagem::all();
        $serie = Serie::all();
        return view('admin.episodio.criar', compact(['personagem', 'serie']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'bimestre' => 'required',
            'texto' => 'required | min:3 | max:200',
            'url_video' => 'required',
            'url_jogo' => 'required',
        ];

        $messages = [ 
            'bimestre.required' => 'O campo bimestre deve ser preenchido',
            'texto.required' => 'O campo texto deve ser preenchido',
            'texto.min' => 'O campo texto deve ter no mínimo 3 caracteres',
            'texto.max' => 'O campo texto deve ter no máximo 200 caracteres',
            'url_video.required' => 'O campo url do vídeo deve ser preenchido',
            'url_jogo.required' => 'O campo url do jogo deve ser preenchido',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        $episodio = new Episodio;
        $episodio->bimestre = $request->bimestre;
        $episodio->id_serie = $request->id_serie;
        $episodio->texto = $request->texto;
        $episodio->url_video = $request->url_video;
        $episodio->url_jogo = $request->url_jogo;

        $episodio->id_personagem = $request->id_personagem;

        $path = $request->file('foto')->store('imagens', 'public');
        $episodio->foto = $path; 

        $episodio->save();


        return redirect()->route('episodio.index');
        

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
            $episodio->url_video = $request->input('url_video');
            $episodio->url_jogo = $request->input('url_jogo');
            $episodio->id_serie = $request->input('id_serie');
            $episodio->id_personagem = $request->input('id_personagem');


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
            return redirect()->route('episodio.index');
        }

        return redirect()->route('admin.dashboard');

    }

    
}
