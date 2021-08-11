@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    
    <h1>Atualizar Resposta</h1>

    <form class="form-horizontal" method="POST" action="{{ route('options.update',['id' => $options->id, 'id_question' => $options->id_question])}}">
        @csrf
        @method('PUT')

        

        <input type="hidden" name="id_question" value="{{$options->id_question}}">

        <div class="mb-3">
            <label for="nome" class="form-label">Resposta</label>
            <input type="text" name="description" class="form-control" placeholder="Digite a pergunta" value="{{$options->description}}">
        </div>

        <select name="id_episodio" id="">
            <option value="0">Está correta?</option>
            
                
                <option value="{{$options->correct}}">{{$options->correct}}</option>
 
        </select>


        <div class="mb-3">
            <input type="submit" class="form-control btn-primary"  value="Atualizar">
        </div>    

    </form> 

</div>



@endsection