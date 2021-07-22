@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Update Episódio</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('admin.episodio.atualizar', $episodio->id) }}">
        {{ csrf_field() }}
        @method('PUT');


        <div class="mb-3">
            <label for="nome" class="form-label">Bimestre</label>
        <input type="text" name="bimestre" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Texto</label>
            <input type="text" name="texto" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Url Jogo</label>
            <input type="text" name="url_jogo" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">id Personagem</label>
            <input type="text" name="id_personagem" class="form-control" id="nome" placeholder="Nome do Personagem" >
        </div>

        
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>



    </form>





@endsection