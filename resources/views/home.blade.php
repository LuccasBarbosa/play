@extends('layouts.app')

@section('content')

<div class="container" id="home img-personagens">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <h1 class="title">Personagens</h1>

            <div class="row mb-20">
                <div class="col-md-3">
                    <a href="{{url('personagens/charles')}}">
                        <img src="{{asset('image/charles.jpeg')}}" alt="" class="img-fluid rounded-circle img-personagens">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/robo.jpeg')}}" alt="" class="img-fluid rounded-circle img-personagens">
                    </a>
                </div>
                
            </div>
    
        </div>

        {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>


            </div> --}}

        <div class="col-md-12">
            <h1 class="title">Episódios</h1>

            <div class="row mb-20">
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/original.jpeg')}}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>


        <div class="col-md-12">
            <h1 class="title">Drops</h1>

            <div class="row mb-20">
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/personagem1.png')}}" alt="" class="img-fluid rounded-circle">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/personagem2.png')}}" alt="" class="img-fluid rounded-circle">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/personagem3.png')}}" alt="" class="img-fluid rounded-circle">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{asset('image/personagem4.png')}}" alt="" class="img-fluid rounded-circle">
                    </a>
                </div>
            </div>
    
        </div>




    </div>
</div>
@endsection
