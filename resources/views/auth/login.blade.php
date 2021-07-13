@extends('layouts.app')

@section('content')

<div class="container login">
    <div class="row">
        <div class="col-md-12">
            <h1 class="carde-header">{{ __('Entrar') }}</h1>
            <h2>Que tal embarcar nessa viagem agora?</h2>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus placeholder="Digite o email da sua conta do PlayNtus">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Digite sua senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-entrar">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-block btn-link text-center" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha? Clique aqui') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-6 cadastre">
            <img src="{{asset('image/register.png')}}" alt="">
            <div class="card">
                

                <div class="card-body">
       

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                
                                <p class="text-center nao-conta" >Não tem uma conta?</p>    

                                <a href="{{ route('register') }}" class="btn btn-block btn-entrar">
                                    {{ __('Cadastre-se') }}
                                </a>

                                
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
