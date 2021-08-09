<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Episodio;
use App\Question;
use App\Serie;
use Validator;


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
         $question = new Question();
         $episodio = Episodio::all();
         $serie = Serie::all();

         return view('admin.question.criar', compact(['question','episodio','serie']));
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
            'id_episodio' => 'required',
            'description' => 'required | min:3 | max:200',
        ];


        $messages = [ 
            'id_episodio.required' => 'O campo espisódio deve ser preenchido',
            'description.required' => 'O campo descrição deve ser preenchido',
            'description.min' => 'O campo texto deve ter no mínimo 3 caracteres',
            'description.max' => 'O campo texto deve ter no máximo 200 caracteres',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        $question = new Question;
        $question->id_episodio = $request->id_episodio;
        $question->id_serie = $request->id_serie;
        $question->description = $request->description;

        $question->save();


        return redirect()->route('question.index');
        

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
    public function edit(Request $request, $id)
    {
        $question = Question::find($id);
        $episodio = Episodio::all();

        if($question){
            return view('admin.question.editar', compact(['question','episodio']));
        }

        return view('admin.question.index');


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
        $rules = [
            'id_episodio' => 'required',
            'description' => 'required | min:3 | max:200',
        ];


        $messages = [ 
            'id_episodio.required' => 'O campo espisódio deve ser preenchido',
            'description.required' => 'O campo descrição deve ser preenchido',
            'description.min' => 'O campo texto deve ter no mínimo 3 caracteres',
            'description.max' => 'O campo texto deve ter no máximo 200 caracteres',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        $question = Question::find($id);
        $question->id_episodio = $request->id_episodio;
        $question->id_serie = $request->id_serie;
        $question->description = $request->description;

        $question->save();


        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();

        return redirect()->route('question.index');


    }

    
}
