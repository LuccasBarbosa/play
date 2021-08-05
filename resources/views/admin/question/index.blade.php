@extends('admin.layouts.app')

@section('content')

<div class="container my-4" id="personagem">
    <div class="row">

        <div class="col-md-12">
            <div class="quiz">
                @foreach ($question as $q)
                    <h1 class="title">{{$q->pergunta}}</h1>
                    <h5>{{$q->id_bimestre}}</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Respostas</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$q->answer1}}</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>{{$q->answer2}}</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>{{$q->answer3}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td >{{$q->answer4}}</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                    
                @endforeach
                
              </div>
        </div>

        

    </div>

    
</div>
@endsection
