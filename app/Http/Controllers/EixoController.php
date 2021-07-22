<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Admin;
use App\Personagem;
use App\Episodio;
use App\Eixo;
use Builder;
use Date;

class EixoController extends Controller
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
 

        return view('admin.eixos.index');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $episodio = Episodio::all();
        return view('admin.eixos.criar', compact('episodio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $eixo = new Eixo;
        $eixo->eixo = $request->eixo;
        $eixo->id_episodio = $request->id_episodio;
        

        $eixo->save();


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
        $eixo = Eixo::find($id); 

        
        if (isset($eixo)) {
            
            return view('admin.eixos.editar', compact(['eixo', 'personagem']));
        }

        return view('admin.eixos.editar');

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
        $eixo = Eixo::find($id); 

        if (isset($eixo)) {
            
            $eixo->eixo = $request->input('eixo');
            $eixo->id_episodio = $request->input('id_episodio');

            $eixo->save();

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
        $eixo = Eixo::find($id); 

        if(isset($eixo)){
            $eixo->delete();
            return redirect('/admin/dashboard');
        }

        return redirect('/admin/dashboard');
    }

    
}
