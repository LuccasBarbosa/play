@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Editar Question</h1>


    <h1 class="title">{{$question->id_episodio}}</h1>

    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('admin.question.atualizar',$question->id)}}">
        {{ csrf_field() }}

       

        <div class="mb-3">
            <label for="id_episodio" class="form-label">Id Espisódio</label>

            <select name="id_episodio" id="">
                <option value="0">Selecione o Bimestre</option>
                @foreach ($episodio as $e)
                    @if ($e->id == $question->id_episodio)
                        <option value="{{$e->id}}" selected>{{$e->bimestre}}</option>
                    @else
                        <option value="{{$e->id}}">{{$e->bimestre}}</option>
                    @endif
                    
                @endforeach

                
            </select>
       </div>  

        <div class="mb-3">
            <label for="nome" class="form-label">Pergunta</label>
            <input type="text" name="description" class="form-control" placeholder="Digite a pergunta" value="{{$question->description}}">
        </div>


        <div class="mb-3">
            <input type="submit" class="form-control btn-primary" id="enviar" value="Atualizar">
        </div>    

    </form> 

</div>



@endsection