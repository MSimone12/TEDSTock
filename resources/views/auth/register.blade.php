@extends('welcome')

@section('titulo', 'TEDStock | Registro')

@section('content')
<main class="col-12" style="background-image: url('img/background.png');height: 74.15vh">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="col-12" style="background-color: white;height: 500px;width: 600px;margin: 5vh 20vw 0">

          <div class="col-12" style="font-size: 30px; font-weight: bold;margin-top:5%;">Login</div>
            <div class="col-12" style="font-size: 15px;">Já é registrado? <a href="{{url('/login')}}">Entrar</a></div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                <div class="col-12">
                    <input id="name" placeholder="Seu Nome" type="text" class="form-control col-12" name="name" value="{{ old('name') }}" style="margin:5% 0" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="col-12">
                    <input id="email" placeholder="Seu email TED" type="email" class="form-control col-12" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="col-12">
                    <input id="password" placeholder="Sua Senha" type="password" class="form-control col-12" name="password" style="margin:5% 0" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">

              <div class="col-12">
                <input id="password-confirm" placeholder="Confirme sua senha" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-12 col-md-offset-4">
                <button type="submit" style="margin:10% 0" class="btn btn-primary form-button col-12">
                    Confirmar Registro
                </button>
              </div>
            </div>
          </form>

      </div>
    </div>
  </div>
</main>
@endsection
