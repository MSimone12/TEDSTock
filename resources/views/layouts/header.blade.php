<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <script src="https://use.fontawesome.com/a104bcefff.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body style="background-color: #003e52;">
      <nav class="navbar navbar-dark fixed-top" style="background-color: rgb(0,31,48);">
        <div class="col-4">
          <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <a href="{{url('/')}}" class="col-4 text-center">
          <img class="navbar-brand" src="{{asset('img/logo.png')}}" alt="">
        </a>
        <div class="col-4 text-right nav justify-content-end">
          <span style="color: #fff" class="nav-item">
            <a href="{{url('/login')}}" class="nav-link text-white">
              Entrar
            </a>
          </span>
          &nbsp;&nbsp;
          <img src="{{asset('img/pipe.png')}}" alt="" class="nav-item">
          &nbsp;&nbsp;
          <span style="color: #fff" class="nav-item">
            <a href="{{url('/register')}}" class="nav-link text-white">
              Registrar-se
            </a>
          </span>
        </div>
      </nav>
