@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Criar Opcoes</h1>


    <form class="form-horizontal" method="POST" action="{{ route('options.store', ['id_question' => $options->id_question]) }}">
        {{ csrf_field() }}

        <input type="hidden" name="id_question" value="{{$options->id_question}}">
        
        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="description" name="description">        
        </div>

        <div class="mb-3">
            <input type="checkbox" class="" id="correct" name="correct" value="S">   
            <label for="correct" class="form-label">Correta?</label>      
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Enviar">
        </div>   
    </form>        

</div>





@endsection