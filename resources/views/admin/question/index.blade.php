@extends('admin.layouts.app')

@section('content')

<div class="container my-4" id="personagem">
    <div class="row">

        <div class="col-md-12">
            <div class="quiz">
                
                    @foreach ($question as $q)
                    <h1 class="title">{{$q->pergunta}}</h1>
                    <h5>{{$q->id_espisodio}}</h5>
                    @endforeach

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($question as $q)
                            <tr>
                                
                                <th scope="row">{{$q->id}}</th>
                                <td>{{$q->episodio}}</td>
                                <td>{{$q->description}}</td>
                                <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.question.editar', $q->id)}}" class="btn btn-primary">Editar</a>

                                            <a href="{{route('admin.question.apagar', $q->id)}}" class="btn btn-danger">Excluir</a>
                                        </div>
                                </td>
                                
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                    
                
                
              </div>
        </div>

        

    </div>

    
</div>
@endsection
