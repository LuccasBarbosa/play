<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Admin;
use App\Episodio;
use App\Question;
use App\Answer;
use Builder;
use Date;

class QuestionController extends Controller
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
 
        $question = Question::all();
        return view('admin.question.index', compact('question'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $episodio = Episodio::all();
        return view('admin.question.criar', compact('episodio'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $quiz = new Question;
        $quiz->id_bimestre = $request->id_bimestre;
        $quiz->question = $request->question;
       
        

        $quiz->save();

        
        return redirect()->route('admin.question.criar');
        

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
        $question = Question::find($id); 
        $answer   = Answer::all(); 

        
        if (isset($question)) {
            
            return view('admin.question.editar', compact(['question', 'answer']));
        }

        return view('admin.question.editar');

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
        $question = Question::find($id); 

       
        if (isset($question)) {
            
            $question->question = $request->input('question');
            
            $question->save();

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
        
    }

    
}
