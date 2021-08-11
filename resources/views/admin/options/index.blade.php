@extends('admin.layouts.app')

@section('content')

<div class="container my-4" id="personagem">
    <div class="row">

    <div class="col-md-12">
        <div class="quiz">

            <a href="{{ route('options.create', ['id_question' => $id_question])}}" class="btn btn-success">Inserir</a>
            

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Correta?</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($options as $o)
                        <tr>
                            
                            <th scope="row">{{$o->id}}</th>   

                            <td>{{$o->description}}</td>
                            <td>{{($o->correct) ? 'Sim' : 'Não'}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('options.edit' ,['id' => $o->id, 'id_question' => $o->id_question] )}}" class="btn btn-primary mr-2">Editar</a>
                                    

                                    <form action="{{route('options.destroy', ['id' => $o->id, 'id_question' => $o->id_question])}}" method="POST">
                                        @csrf
                                        @method('delete')


                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
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
