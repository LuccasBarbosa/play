@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Criar Pergunta</h1>

    <form class="form-horizontal" method="POST" action="{{ route('admin.question.store') }}">
        {{ csrf_field() }}

        @if ($errors->any())
        <div class="alert alert-danger">
            <p>Os seguintes erros foram encontrados:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <select name="id_episodio" class="form-control my-4">
            <option value="#">Escolha o Episódio</option>
            @foreach ($episodio as $e)
                <option value="{{$e->id}}">{{$e->bimestre}}</option>
            @endforeach
        </select>


        {{-- PERGUNTA 1 --}}
        <div class="mb-3">
            <label for="description" class="form-label">Pergunta</label>
            <input type="text" class="form-control" id="description" name="description">        
        </div>


        
        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
        </div>
    </form>





@endsection