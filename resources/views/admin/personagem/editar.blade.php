@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Editar Personagem</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('admin.personagem.atualizar',$personagem->id)}}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do Personagem" value="{{$personagem->nome}}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>   
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Atualizar">
        </div>    

    </form>

    <form class="form-horizontal" method="POST" action="{{route('admin.personagem.apagar',$personagem->id)}}">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="hidden" name="_method" value="delete">
            <input type="submit" class="form-control btn-danger" id="enviar" value="Apagar">
        </div> 
    </form>    
    

</div>



@endsection