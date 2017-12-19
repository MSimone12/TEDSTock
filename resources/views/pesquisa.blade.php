@extends('welcome')

@section('titulo', 'TEDStock | Pesquisa')

@section('content')
<form class="container col-12 text-center" action="{{route('busca')}}" method="get">
  <div class="row">
    <div class="input-group">
      <input type="search" name="busca" value="" placeholder="Pesquise na TEDStock" class="form-control text-center">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-info">
          <i class="fa fa-search"></i>
        </button>
      </span>
    </div>
  </div>
</form>
<main style="background-image: url('img/background.png'); background-repeat: no-repeat;background-size: cover;height:74.15vh;display:block">
  <div class="container col-12" >
       @foreach($imagens as $imagem)
       <div class="figure">
           <img src="{{asset($imagem->imagem)}}" alt="" class="figure-img">
           <input type="hidden" name="id" value="{{$imagem->id}}">
       </div>

       @endforeach
     </div>
     <div class="popup">
     </div>
     <div class="download">
     </div>
</main>

@endsection
