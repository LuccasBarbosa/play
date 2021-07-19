@extends('admin.layouts.app')

@section('content')
<div class="container dashboard">
    
    <div class="row personagens">

        <div class="col-md-12">

            <div class="row">

                <h2  class="title">Personagens</h2>

                <div class="col-md-3">
                    <a href="#"><img src="http://lorempixel.com/200/200" class="img-fluid rounded-circle" alt="..."></a>
                </div>
                
            </div>

        </div>

    </div>

    <div class="row historias">
        <h2 class="title">Histórias</h2>

        <div class="col-md-4">
            <div class="card">
                <img src="http://lorempixel.com/400/400" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">História</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptatum dolorem repellat in sapiente eos optio placeat totam. Quaerat, modi possimus asperiores magni laudantium nulla alias at aspernatur quas molestiae?.</p>
                <a href="#" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>

        

    </div>
</div>





@endsection


