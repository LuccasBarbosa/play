@extends('layouts.app')

@section('content')
<div class="container" id="cadastro">
    <div class="row">
        <div class="col-md-12">
            <h1>Cadastre-se na PlayNtus!</h1>
            <h2>Não se preocupe, seus dados serão utilizados com segurança apenas pelo <br>Play Ntus e para garantir uma experiência completa.</h2>
        </div>
        
        <div class="col-md-7">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">


                            <div class="col-md-12">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail do responsável">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crie uma senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>  Ao usar os serviços da Play Ntus, você concorda com nossa a <a href="">Política de Privacidade</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ao usar os serviços da Playkids, você concorda com nossos <a href="">Termos de Uso</a> 
                                    </label>
                                </div>
                            </div>
                        </div>

                    

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-entrar btn-block">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <form action="#">
                    <p>Para facilitar, você pode criar sua conta usando o Facebook</p>
                    <a href=""></a>
                </form>

                <form action="">
                    <p>Você está vindo por algum parceiro PlayNtus? Então Clique aqui</p>
                    <button class="btn btn-entrar btn-block">Continuar via parceiro</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
