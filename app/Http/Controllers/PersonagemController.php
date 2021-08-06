<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Admin;
use App\Personagem;
use Builder;
use Date;

class PersonagemController extends Controller
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
 

        return view('admin.personagem.index');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personagem.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nome' => 'required',
        ]);

        $path = $request->file('foto')->store('imagens', 'public');

        $personagem = new Personagem;
        $personagem->nome = $request->nome;
        $personagem->texto = $request->texto;
        $personagem->foto = $path;    

        


        $personagem->save();


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
        $personagem = Personagem::find($id); 

        
        if (isset($personagem)) {
            
            return view('admin.personagem.editar', compact('personagem'));
        }

        return view('admin.personagem.editar');

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
        $personagem = Personagem::find($id); 

       
        if (isset($personagem)) {
            
            $personagem->nome = $request->nome;
            $personagem->texto = $request->texto;
            $path = $request->file('foto')->store('imagens', 'public');
            $personagem->foto = $path;  

            $personagem->save();

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
        $personagem = Personagem::find($id); 

        if(isset($personagem)){
            $personagem->delete();
            return redirect('/admin/dashboard');
        }

        return redirect('/admin/dashboard');


    }

    public function listarTodos()
    {
        
    }

    

    
}
