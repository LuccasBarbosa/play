@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Episódios</h1>

    <div class="row">
        @foreach ($episodio as $e)
        <div class="col-md-4">
            <div class="card">

                <img src="{{ url("storage/{$e->foto}") }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h1 class="card-title">{{$e->id_serie}}</h1>
                <h5 class="card-title">{{$e->bimestre}}</h5>
                <p class="card-text">{{$e->texto}}</p>
                

                <a href="{{route('admin.episodio.editar', $e->id)}}" class="btn btn-primary">Editar</a>

                <a href="{{route('admin.episodio.apagar', $e->id)}}" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    
</div>





@endsection