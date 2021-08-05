@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Editar Episódio</h1>


    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('admin.episodio.atualizar',$episodio->id)}}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nome" class="form-label">Bimestre</label>
            <input type="text" name="bimestre" class="form-control" id="nome"  value="{{$episodio->bimestre}}">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Texto</label>
            <input type="text" name="texto" class="form-control" id="nome"  value="{{$episodio->texto}}">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Url do Jogo</label>
            <input type="text" name="url_jogo" class="form-control" id="nome" value="{{$episodio->url_jogo}}">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Url do Vídeo</label>
            <input type="text" name="url_video" class="form-control" id="nome" value="{{$episodio->url_video}}">
        </div>
        
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" value="{{$episodio->foto}}">
        </div>   

        <div class="mb-3">
            <label for="foto" class="form-label">Série</label>

            <select name="id_serie" id="">

                <option value="{{$episodio->id_serie}}">{{$episodio->id_serie}}</option>
                
            </select>
       </div>  

        <div class="mb-3">
            <label for="foto" class="form-label">Personagem</label>
            <select name="id_personagem" id="">

                <option value="{{$episodio->id_personagem}}">{{$episodio->id_personagem}}</option>
                
            </select>
       </div>  
       
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>
    </form>





@endsection