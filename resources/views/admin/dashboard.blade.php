@extends('admin.layouts.app')

@section('content')
<div class="container-fluid dashboard">
    
    <div class="row">

        <div class="col-md-2 left-sidebar">
            <h1>Dashboard</h1>

            <a class="" href="{{ route('admin.personagem.criar') }}">
                <i class="fa fa-circle" aria-hidden="true"></i>
                Personagem 
            </a>
            
            <a class="" href="{{ route('admin.serie.criar') }}">
                <i class="fa fa-circle" aria-hidden="true"></i>
                Série
            </a>     
                  
            <a class="" href="{{ route('admin.episodio.criar') }}">
                <i class="fa fa-circle" aria-hidden="true"></i>
                Episódio
            </a>   

            <a class="" href="{{ route('admin.question.criar') }}">
                <i class="fa fa-circle" aria-hidden="true"></i>
                Questões
            </a>           

            {{-- <a class="" href="{{ route('admin.question.criar') }}">
                <i class="fa fa-circle" aria-hidden="true"></i>
                Quiz
            </a> --}}

            
        </div>

        <div class="col-md-10 centro ">

            <div class="row py-4">

                <h2 class="title">Personagens</h2>

                @if (isset($personagem))
                    @foreach ($personagem as $p)

                        <div class="col-md-3">
                            <div class="card p-0">

                                <img src="{{ url("storage/{$p->foto}") }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title text-center">{{$p->nome}}</h5>
                                
                                <a href="{{route('admin.personagem.editar', $p->id)}}" class="btn btn-primary">Editar</a>

                                <a href="{{route('admin.personagem.apagar', $p->id)}}" class="btn btn-danger">Excluir</a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else
                <p>Não existe ainda :(</p>
                @endif

            </div>

            <div class="row historias py-4">
                <h2 class="title">Série</h2>
        
                @if (isset($personagem))
                    @foreach ($serie as $s)
        
                    <div class="col-md-4">
                        <div class="card">
        
                            <img src="{{ url("storage/{$s->capa}") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">{{$s->serie}}</h5>
        
                            <a href="{{route('admin.serie.editar', $s->id)}}" class="btn btn-primary">Editar</a>
        
                            <a href="{{route('admin.serie.apagar', $s->id)}}" class="btn btn-danger">Excluir</a>
                            </div>
                        </div>
                    </div>
        
                    @endforeach
                @else
                    <p>Não existe ainda :(</p>
                @endif
  
            </div>

            <div class="row historias py-4">
                <h2 class="title">Episódios</h2>
        
                @if (isset($personagem))
                    @foreach ($episodio as $e)
        
                    <div class="col-md-4">
                        <div class="card">
        
                            <img src="{{ url("storage/{$e->foto}") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{$e->bimestre}}</h5>
                            <p class="card-text">{{$e->texto}}</p>
        
                            <a href="{{route('admin.episodio.editar', $e->id)}}" class="btn btn-primary">Editar</a>
        
                            <a href="{{route('admin.episodio.apagar', $e->id)}}" class="btn btn-danger">Excluir</a>
                            </div>
                        </div>
                    </div>
        
                    @endforeach
                @else
                    <p>Não existe ainda :(</p>
                @endif
  
            </div>


            

        </div>

       

    </div>

    
</div>





@endsection


