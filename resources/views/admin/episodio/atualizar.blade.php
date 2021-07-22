@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Update Episódio</h1>

    <form class="form-horizontal" method="POST" action="{{ route('admin.episodio.atualizar', 1) }}">
        {{ csrf_field() }}
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
        <input type="text" name="texto" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
        <input type="text" name="url_jogo" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>

        
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>



    </form>





@endsection