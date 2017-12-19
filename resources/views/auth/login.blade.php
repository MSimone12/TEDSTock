@extends('welcome')

@section('titulo', 'TEDStock | Login')

@section('content')
<main class="col-12" style="background-image: url('img/background.png');height: 74.15vh;background-repeat: no-repeat;background-size: cover;">
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="col-auto" style="background-color: white;height: 400px;width: 500px;margin: 10vh 25%;">
                <div class="col-12" style="font-size: 30px; font-weight: bold;margin-top:5%;">Login</div>
                <div class="col-12" style="font-size: 15px;">Não é registrado? <a href="{{url('/register')}}">Registre-se</a></div>
                  <form method="POST" action="{{ url('/login') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                          <div class="col-12">
                              <input id="email" type="email" class="form-control col-12" name="email" value="{{ old('email') }}" placeholder="Seu Email" style="margin:10% 0" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                          <div class="col-12">
                              <input id="password" type="password" class="form-control" name="password" placeholder="Sua Senha" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-12 col-md-offset-4">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Lembrar de Mim
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-12 col-md-offset-4">
                              <button type="submit" class="btn btn-primary col-12 form-button">
                                  Entrar
                              </button>
                              <br>
                              <a class="btn col-12 text-center" href="{{ url('/password/reset') }}">
                                  Esqueceu sua senha?
                              </a>
                          </div>
                      </div>
                  </form>
            </div>
        </div>
    </div>
  </div>
</main>
@endsection
