<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagens;

class ImagensController extends Controller
{
    public function busca(Request $req) {
      $tag = $req->input('busca');
      $imagens = Imagens::where('tags','like',$tag);
      return view('pesquisa',compact('imagens'));
      dd($req);
    }
}
