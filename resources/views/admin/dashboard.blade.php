@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    <div class="row personagens">

        <div class="col-md-12">

            <div class="row">

                <h2 class="title">Personagens</h2>
                
                @if(isset($personagem))
                        @forelse ($personagem as $p)
                            <div class="col-md-3">

                                <a href="{{ route('admin.personagem.editar', $p->id) }}">
                                        <img src="{{ url("storage/{$p->foto}") }}" alt="{{ $p->foto }}" class="img-fluid rounded-circle">
                                    </a>
                                
                            </div>
                    @empty
                        <p>Não personagens ainda :(</p>    
                    @endforelse
                @else
                    <p>Não personagens ainda :(</p>   
                @endif
                
                
            </div>

        </div>

    </div>

    <div class="row historias">
        <h2 class="title">Episódios</h2>

        @if (isset($personagem))
            @foreach ($episodio as $e)

            <div class="col-md-4">
                <div class="card">

                    <img src="{{ url("storage/{$e->foto}") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$e->bimestre}}</h5>
                    <p class="card-text">{{$e->texto}}</p>
                    <a href="#" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>

            @endforeach
        @else
            <p>Não existe ainda :(</p>
        @endif
        

        

    </div>
</div>





@endsection


