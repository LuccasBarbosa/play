@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Editar Série</h1>


    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('admin.serie.atualizar',$serie->id)}}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="foto" class="form-label">Capa</label>
            <input type="file" class="form-control" id="foto" name="capa" value="{{$serie->capa}}">
        </div>   

        <div class="mb-3">
            <label for="serie" class="form-label">Série</label>    
            <input type="text" name="serie" class="form-control" id="serie"  value="{{$serie->serie}}">  
        </div>

        <div class="mb-3">
            <label for="texto" class="form-label">Texto</label>    
            <input type="text" name="texto" class="form-control" id="texto"  value="{{$serie->texto}}">  
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Eixos de Desenvolvimento</label>    
            <input type="text" name="eixo" class="form-control" id="nome"  value="{{$serie->eixo}}">  
        </div>

        <div class="mb-3">
            <select name="id_personagem" id="">

                <option value="{{$serie->id_personagem}}">{{$serie->id_personagem}}</option>
                
            </select>
        </div>  
       
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>
    </form>





@endsection