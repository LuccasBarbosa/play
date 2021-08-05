@extends('layouts.app')

@section('content')

<div class="container" id="personagem">
    <div class="row">

        <div class="voltar">
            <h1>
                {{-- <a href="{{ URL::previous() }}"> --}}
                <a href="{{route('home')}}">    
                    <img src="{{asset('image/voltar.png')}}" alt="" class="back">
                    Voltar
                </a>
            </h1>
        
            <img src="{{asset('image/charlie-bg.jpeg')}}" alt="" class="img-fluid cover">
        </div>
        
 
        <div class="col-md-6">
                <div class="informacoes">
                    <img src="{{ url("storage/{$personagem->foto}") }}" alt="" class="img-fluid">
                    <h1>{{$serie->serie}}</h1>
                    <h3>{{$serie->texto}}</h3>
                </div>
            
        </div>

        {{-- {{$personagem}} --}}

        <div class="col-md-6">
            <div class="tags">
                <h3>Eixos de Desenvolvimento</h3>
                <div class="selos">
                    
                    <span>{{$serie->eixo}}</span>
                    

                </div>
            </div>
        </div>

    </div><!--row-->

    <hr>

    <h3>Episódios</h3>

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
