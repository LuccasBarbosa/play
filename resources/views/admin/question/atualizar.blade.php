@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Update Question</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('admin.question.atualizar', $question->id) }}">
        {{ csrf_field() }}
        @method('PUT');


        <div class="mb-3">
            <label for="nome" class="form-label">Id Espisodio</label>
        <input type="text" name="id_episodio" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>
        

        
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>



    </form>





@endsection