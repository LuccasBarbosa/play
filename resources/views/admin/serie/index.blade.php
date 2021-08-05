@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Séries</h1>

    <div class="row">
        @foreach ($serie as $s)
        <div class="col-md-4">
            <div class="card">

                <img src="{{ url("storage/{$s->capa}") }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">{{$s->serie}}</h5>
                {{-- <p class="card-text">{{$s->id_personagem}}</p> --}}

                <a href="{{route('admin.serie.editar', $s->id)}}" class="btn btn-primary">Editar</a>

                <a href="{{route('admin.serie.apagar', $s->id)}}" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    
</div>





@endsection