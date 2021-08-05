@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Update Série</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('admin.serie.atualizar', $serie->id) }}">
        {{ csrf_field() }}
        @method('PUT');


        <div class="mb-3">
            <label for="nome" class="form-label">Série</label>
             <input type="text" name="serie" class="form-control" id="nome" placeholder="Qual a série?" >
        </div>
        <div class="mb-3">
            <label for="capa" class="form-label">Capa</label>
            <input type="text" name="capa" class="form-control" id="capa" placeholder="Qual a capa?" >
        </div>
        

        
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>



    </form>





@endsection