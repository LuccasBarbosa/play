@extends('layouts.app')

@section('content')

<div class="container" id="personagem">
    <div class="row">

        <div class="voltar">
            <h1>
                <a href="{{ URL::previous() }}">
                    <img src="{{asset('image/voltar.png')}}" alt="" class="back">
                    Voltar
                </a>
            </h1>
        
            <img src="{{asset('image/charlie-bg.jpeg')}}" alt="" class="img-fluid cover">
        </div>

        <div class="col-md-12">
          <div class="box-img">
              <img src="{{asset('image/bita.jpeg')}}" alt="" class="img-fluid">
              <h1 class="title">Charles</h1>
          </div>  
        </div>   

        <div class="col-md-6">
            <div class="informacoes">
                <h3>7 Temporadas</h3>
                <p>O Mundo Bita são clipes musicais com canções originais onde as crianças embarcam no mundo das descobertas das cores, dos animais, os momentos do dia a dia, as partes do corpo humano e a natureza.</p>
              </div>
        </div>

        <div class="col-md-6">
            <div class="tags">
                <h3>Eixos de Desenvolvimento</h3>
                <div class="selos">
                    <span>Fantasia e Imaginação</span>
                    <span>Canções e Ritmos</span>
                    <span>Hábitos e Rotina</span>
                    <span>Higiene e Bem-estar</span>
                    <span>Animais</span>
                    <span>Esportes e Atividades</span>
                    <span>Vocabulário e Palavras</span>
                </div>
            </div>
        </div>

    </div>

    <hr class="divisao">

    <div class="row">
        <div class="col-md-12">
            <h1 class="title">Episódios</h1>

            <div class="row mb-20">
                <div class="col-md-3">
                    <a href="#">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
