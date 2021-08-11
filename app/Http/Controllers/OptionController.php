<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Admin;
use App\Episodio;
use App\Question;
use App\Option;
use Validator;

class OptionController extends Controller
{

    public function __construct()
    {
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_question)
    {
 
        $options = Option::where('id_question', $id_question)->get();
        $id_question = $id_question;

        return view('admin.options.index', compact(['options', 'id_question']));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_question)
    {
        
        $options = new Option;
        $options->id_question = $id_question;


        return view('admin.options.create', compact(['options']));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_question)
    {


        $options = new Option;
        $options->id_question = $request->id_question;
        $options->description = $request->description;
        $options->correct = ($request->correct == 'S');

        $options->save();


        return redirect()->route('options.index', ['id_question' => $options->id_question]);
  

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
    public function edit($id_question, $id)
    {
        $options = Option::findOrFail($id);

        return view('admin.options.edit', compact(['options']));  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_question, $id)
    {
        $rules = [
            'id_question' => 'required',
            'description' => 'required | min:3 | max:200',
        ];


        $messages = [ 
            'id_question.required' => 'O campo espisódio deve ser preenchido',
            'description.required' => 'O campo descrição deve ser preenchido',
            'description.min' => 'O campo texto deve ter no mínimo 3 caracteres',
            'description.max' => 'O campo texto deve ter no máximo 200 caracteres',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        $options = Option::findOrFail($id);
        $options->id_question = $request->id_question;
        $options->description = $request->description;
        $options->correct = ($request->correct == 'S');

        $options->save();


        return redirect()->route('options.index', ['id_question' => $options->id_question]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_question, $id)
    {
        $options = Option::findOrFail($id);
        $options->delete();


        return redirect()->route('options.index', ['id_question' => $options->id_question]);
    }

    
}
