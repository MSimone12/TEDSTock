@extends('welcome')

@section('titulo','TEDStock')

@section('content')
  <main>
    <div class="container">
      <img src="{{asset('img/fundo.png')}}" alt="" style="position:absolute;left:0px;top: 103px;" width="100%">
      <form class="container col-12 text-center" action="{{route('busca')}}" method="get">
        <div class="row">
          <input type="search" name="busca" value="" placeholder="Pesquise na TEDStock" class="form-control text-center" style="position:absolute;top:400px;">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </main>
@endsection
