@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Editar Quizz</h1>

    <h1 class="title">{{$question->id_bimestre}}</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('admin.question.atualizar',$question->id)}}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nome" class="form-label">Pergunta</label>
            <input type="text" name="pergunta" class="form-control" placeholder="Digite a pergunta" value="{{$question->question}}">
        </div>

        @foreach ($answer as $a)

        
            <div class="mb-3">
                <label for="nome" class="form-label">Resposta 1</label>
                <input type="text" name="answer1" class="form-control" placeholder="Digite a resposta" value="{{$a->answer}}">
            </div>
        @endforeach
        
        

        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Atualizar">
        </div>    

    </form> 

</div>



@endsection