@extends('layouts.app')

@section('content')

<div>
    <div class="voltar">
        <h1>
            <a href="{{route('home')}}">    
                <img src="{{asset('image/voltar.png')}}" alt="" class="back">
                Voltar
            </a>
        </h1>
    
        <img src="{{asset('image/charlie-bg.jpeg')}}" alt="" class="img-fluid cover">
    </div>
</div>

<div class="container" id="personagem">
    <div class="row">

        <div class="col-md-12">
          <div class="box-img">
              <img src="{{ url("storage/{$personagem->foto}") }}" alt="" class="img-fluid">
              <h1 class="title">{{$personagem->nome}}</h1>
          </div>  
        </div>   

        <div class="col-md-6">
            <div class="informacoes">
                    <div class="age">2+</div>
                    <span>Contador</span>
                    <p class="mt-2">{{$personagem->texto}}</p>
                
              </div>
        </div>

        <div class="col-md-6">
            <div class="info">
                <p>Todo show no PlayKids é apropriado para todas as idades, mas alguns temas são melhor compreendidos em estágios específicos do desenvolvimento do pequeno.</p>
            </div>

            <div class="tags">
                <h3>Eixos de Desenvolvimento</h3>
                <div class="selos">

                    {{-- <span>{{$episodio->eixo}}</span> --}}
                    

                </div>
            </div>
        </div>

    </div>

    <hr>

    <h3 class="title mb-4">Episódios</h3>

    <div class="row">
        @foreach ($episodio as $e)
        <div class="col-md-3">
            
            <a href="{{ url("../episodio/{$e->id}") }}">
                <img src="{{ url("storage/{$e->foto}") }}" alt="" class="img-fluid">
                <h1 class="title">{{$e->nome}}</h1>
                <p>{{$e->texto}}</p>
            </a>
           
        </div>
        @endforeach
    </div>

    <hr>

    <h3 class="title mb-4">Quiz</h3>

    <div class="row">
        @foreach ($episodio as $e)
        <div class="col-md-3">
            
            <a href="{{ url("../episodio/{$e->id}") }}">
                <img src="{{ url("storage/{$e->foto}") }}" alt="" class="img-fluid">
                <h1 class="title">{{$e->nome}}</h1>
                <p>{{$e->texto}}</p>
            </a>
           
        </div>
        @endforeach
    </div>


    


    
</div>
@endsection
