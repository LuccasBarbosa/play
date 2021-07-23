@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Criar Episódio</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('admin.episodio.store') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="bimestre" class="form-label">Bimestre</label>
            <input type="text" class="form-control" id="bimestre" name="bimestre">        
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Texto</label>
            <input type="text" class="form-control" id="texto" name="texto">        
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Url Jogo</label>
            <input type="text" class="form-control" id="url_jogo" name="url_jogo">
        </div>   
        <div class="mb-3">
            <label for="foto" class="form-label">Eixos de Desenvolvimento</label>
            <input type="text" class="form-control" id="eixo" name="eixo[]">        
        </div>   
        <div class="mb-3">
            <label for="foto" class="form-label">Capa</label>
            <input type="file" class="form-control" id="foto" name="foto">
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