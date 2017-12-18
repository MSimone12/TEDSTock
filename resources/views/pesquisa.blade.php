@extends('welcome')

@section('titulo', 'TEDStock | Pesquisa')

@section('content')

<main style="background-image: url('img/background.png'); background-cover: no-repeat;">
   <div class="container">
     <div class="row">
       <div class="card col-4">
         <img src="img/logo.png" alt="">
       </div>
       <div class="card col-4">
         <img src="img/logo.png" alt="">
       </div>
       
     </div>

       @foreach($imagens as $imagem)

       @endforeach
   </div>
</main>

@endsection
