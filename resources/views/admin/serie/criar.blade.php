@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Criar Série</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Os seguintes erros foram encontrados:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('admin.serie.store') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="serie" class="form-label">Série</label>
            <input type="text" class="form-control" id="serie" name="serie">        
        </div>

        <div class="mb-3">
            <label for="texto" class="form-label">Texto</label>
            <input type="text" class="form-control" id="texto" name="texto">        
        </div>

        <div class="mb-3">
            <label for="eixo" class="form-label">Eixo</label>
            <input type="text" class="form-control" id="eixo" name="eixo[]">        
        </div>
        
        <hr>
         
        <div class="mb-3">
            <label for="capa" class="form-label">Capa</label>
            <input type="file" class="form-control" id="capa" name="capa">
        </div> 
        <div class="mb-3">
            <select name="id_personagem" id="">

                <option value="">Selecione o personagem</option>

                @forelse ($personagem as $p)    
                    <option value="{{$p->id}}">{{$p->nome}}</option>
                @empty
                     <option value="">Sem Personagem</option>
                @endforelse
                
            </select>
       </div>   
        
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>
    </form>





@endsection