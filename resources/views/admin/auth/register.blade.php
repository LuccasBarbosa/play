@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
               

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.register.store') }}">
                        {{ csrf_field() }}

                        <div class="text-center mb-4">
                            <img class="mb-4 logo img-fluid" src="{{asset('img/logo.png')}}" alt="noctus" width="72" height="72">
                            <h1 class="h3 mb-3 font-weight-normal">...</h1>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-offset-3 col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nome">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{-- <label for="email" class="col-md-4 control-label">E-Mail</label> --}}

                            <div class="col-md-offset-3 col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{-- <label for="password" class="col-md-4 control-label">Senha</label> --}}

                            <div class="col-md-offset-3 col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Senha">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{-- <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label> --}}

                            <div class="col-md-offset-3 col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Senha">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
