@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Update Personagem</h1>

    <form class="form-horizontal" method="POST" action="{{ route('admin.personagem.store') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do Personagem">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Nome</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>   
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>
    </form>





@endsection