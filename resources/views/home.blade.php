@extends('layouts.app')

@section('content')

<div class="container" id="home">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <h1 class="title">Personagens</h1>

            <div class="row mb-20">
                @foreach ($personagem as $p)
                
                <div class="col-md-3">
                    <a href="{{ url("../personagem/{$p->id}") }}" class="link-personagem">
                        <img src="{{ url("storage/{$p->foto}") }}" alt="" class="img-fluid rounded-circle img-personagens">
                        
                    </a>
                </div>

                @endforeach
                
            </div>
    
        </div>

        
        <div class="col-md-12">
            <h1 class="title">Séries</h1>


            <div class="row mb-20">
                @foreach ($serie as $s)         
                    <div class="col-md-3 zoom">
                        <a href="{{ url("../serie/{$s->id}") }}" >
                            <img src="{{ url("storage/{$s->capa}") }}" alt="" class="img-fluid">
                            <p class="serie">1º Série</p>
                            <p class="episodio-count">8 episódios</p>
                        </a>
                    </div>
                @endforeach
                
                
            </div>

        </div>

    </div>
</div>
@endsection
