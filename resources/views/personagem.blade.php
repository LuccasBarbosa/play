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

        <div class="col-md-12">
          <div class="box-img">
              <img src="{{ url("storage/{$personagem->foto}") }}" alt="" class="img-fluid">
              <h1 class="title">{{$personagem->nome}}</h1>
          </div>  
        </div>   

        <div class="col-md-6">
            <div class="informacoes">
                @foreach ($episodio as $e)
                    <h3>{{$e->bimestre}}</h3>
                    <p>{{$e->texto}}</p>
                @endforeach
              </div>
        </div>

        <div class="col-md-6">
            <div class="tags">
                <h3>Eixos de Desenvolvimento</h3>
                <div class="selos">

                    {{-- <span>{{$episodio->eixo}}</span> --}}
                    

                </div>
            </div>
        </div>

    </div>

    <hr class="divisao">

    <div class="row">
        <div class="col-md-12">
            <h1 class="title">Episódios</h1>

            <div class="row mb-20">
                @foreach ($episodio as $e)
                    <div class="col-md-3">
                        <a href="{{ url("episodio/{$e->id}") }}">
                            <img src="{{ url("storage/{$e->foto}") }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    
                @endforeach
                
                
            </div>

        </div>
    </div>
</div>
@endsection
