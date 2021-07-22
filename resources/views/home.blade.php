@extends('layouts.app')

@section('content')

<div class="container" id="home img-personagens">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <h1 class="title">Personagens</h1>


            <div class="row mb-20">
                @foreach ($personagem as $p)
                
            
                <div class="col-md-3">
                    <a href="#">
                        <img src="{{ url("storage/{$p->foto}") }}" alt="" class="img-fluid rounded-circle img-personagens">
                    </a>
                </div>
                @endforeach
                
            </div>
    
        </div>

        
        <div class="col-md-12">
            <h1 class="title">Episódios</h1>

            <div class="row mb-20">
                @foreach ($episodios as $e)
                
            
                <div class="col-md-3">
                    <a href="{{$e->id}}">
                        <img src="{{ url("storage/{$e->foto}") }}" alt="" class="img-fluid">
                    </a>
                </div>
                @endforeach
                
                
            </div>

        </div>


        <div class="col-md-12">
            <h1 class="title">Drops</h1>

            <div class="row mb-20">
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/personagem1.png')}}" alt="" class="img-fluid rounded-circle">
                    </a>
                </div>
                
            </div>
    
        </div>




    </div>
</div>
@endsection
