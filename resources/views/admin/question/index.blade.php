@extends('admin.layouts.app')

@section('content')

<div class="container my-4" id="personagem">
    <div class="row">

        <div class="col-md-12">
            <div class="quiz">

                <a href="{{route('admin.question.criar')}}" class="btn btn-success">Inserir</a>
                
                    @foreach ($question as $q)
                        <h1 class="title">{{$q->pergunta}}</h1>
                        <h5>{{$q->id_espisodio}}</h5>
                    @endforeach

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Série</th>
                            <th scope="col">Bimestre</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($question as $q)
                            <tr>
                                
                                <th scope="row">{{$q->id}}</th>   
                                <td>{{$q->description}}</td>
                                <td>{{$q->id_serie}}</td>
                                <td>{{$q->id_episodio}} bimestre</td>
                                <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.question.editar', $q->id)}}" class="btn btn-primary mr-2">Editar</a>
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
