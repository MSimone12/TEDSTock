@extends('welcome')

@section('titulo','TEDStock')

@section('content')
  <main style="background: url('img/fundo.png') no-repeat;background-size: cover;
  height: 72.24%;width: 100%">
    <div class="container">
      <!-- <img src="{{asset('img/fundo.png')}}" alt="" style="position:absolute;left:0px;top: 103px;" width="100%"> -->
      <form class="container col-12 text-center" action="{{route('busca')}}" method="get">
        <div class="row">
          <div class="input-group" style="position:absolute;top:30vh;">
            <input type="search" name="busca" value="" placeholder="Pesquise na TEDStock" class="form-control text-center">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-info">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </div>
      </form>
    </div>
  </main>
@endsection
