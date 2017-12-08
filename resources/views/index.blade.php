@extends('welcome')

@section('content')
  <main>
    <div class="container">
      <img src="{{asset('img/fundo.png')}}" alt="" style="position:absolute;left:0px;top: 103px;" width="100%">
      <form class="container col-12 text-center" action="" method="post">
        <div class="row">
          <input type="search" name="busca" value="" placeholder="Pesquise na TEDStock" class="form-control text-center" style="position:absolute;top:400px;">
        </div>
      </form>
    </div>
  </main>
@endsection
