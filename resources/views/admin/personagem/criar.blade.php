@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Criar Personagem</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('admin.personagem.store') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do Personagem">
        </div>

        <div class="mb-3">
            <label for="texto" class="form-label">Texto</label>
            <textarea name="texto" class="form-control" id="texto" placeholder="Texto"></textarea>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>   
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>
    </form>





@endsection