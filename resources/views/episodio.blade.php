@extends('layouts.app')

@section('content')

<div class="container" id="personagem">
    <div class="row">

        <div class="col-md-12">
            <h1>{{$episodio->id_serie}} série / {{$episodio->bimestre}}</h1>
            <p>{{$episodio->texto}}</p>
        </div>

        {{-- <div class="voltar">
            <h1>
                <a href="{{route('home')}}">    
                    <img src="{{asset('image/voltar.png')}}" alt="" class="back">
                    Voltar
                </a>
            </h1>
        
            <img src="{{asset('image/charlie-bg.jpeg')}}" alt="" class="img-fluid cover">
        </div> --}}
        

        {{-- <div class="col-md-12">
          <div class="box-img">
              <img src="{{ url("storage/{$personagem->foto}") }}" alt="" class="img-fluid">
              <h1 class="title">{{$personagem->nome}}</h1>
          </div>  
        </div>    --}}


        {{-- <div class="col-md-6">
            <div class="informacoes">
                <h3>{{$episodio->bimestre}}</h3>
                <p>{{$episodio->texto}}</p>
              </div>
        </div>

        <div class="col-md-6">
            <div class="tags">
                <h3>Eixos de Desenvolvimento</h3>
                <div class="selos">

                    

                </div>
            </div>
        </div> --}}

    </div>


    <div class="row">
        <div class="col-md-12">
            <h1 class="title">Vídeo</h1>
                <iframe width="100%" height="505" src="{{ $episodio->url_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
    </div>


   
</div>
@endsection
