@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    

    <form class="form-horizontal" method="POST" action="{{ route('admin.answer.store') }}">
        {{ csrf_field() }}

        <select name="id_bimestre" class="form-control my-4">
            <option value="#">Escolha o bimestre</option>
            @foreach ($episodio as $e)
                <option value="{{$e->id}}">{{$e->bimestre}}</option>
            @endforeach 
        </select>


        <select name="id_question" class="form-control my-4">
            <option value="#">Escolha a pergunta</option>
            @foreach ($question as $q)
                <option value="{{$q->id}}">{{$q->question}}</option>
            @endforeach    
        </select>

        
        <div class="mb-3">
            <label for="resposta" class="form-label">Resposta</label>
            <input type="text" class="form-control" id="pergunta" name="answer">  
            <input type="hidden" class="form-control" id="pergunta" name="valor" value="0">        
        </div>
       
        {{-- <div class="mb-3">
            <label for="resposta" class="form-label">Resposta 2</label>
            <input type="text" class="form-control" id="pergunta" name="answer2">        
        </div>
        <div class="mb-3">
            <label for="resposta" class="form-label">Resposta 3</label>
            <input type="text" class="form-control" id="pergunta" name="answer3">        
        </div>
        <div class="mb-3">
            <label for="resposta" class="form-label">Resposta 4</label>
            <input type="text" class="form-control" id="pergunta" name="answer4">        
        </div> --}}
   
        
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>
    </form>

@endsection