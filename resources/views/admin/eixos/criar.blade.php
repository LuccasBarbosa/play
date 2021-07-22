@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Criar Eixos</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('admin.eixos.store') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="eixo" class="form-label">Eixo</label>
            <input type="text" class="form-control" id="eixo" name="eixo[]">        
        </div>
        
        <div class="mb-3">
            <select name="id_episodio" id="">

                <option value="">Selecione o Episódio</option>


                @forelse ($episodio as $p)    
                    <option value="{{$p->id}}">{{$p->id}}</option>
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