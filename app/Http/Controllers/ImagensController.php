<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagens;

class ImagensController extends Controller
{
    public function index(){
      return view('index');
    }
    public function busca(Request $req) {
      $tag = $req->query('busca');
      $query = $req->query('busca');
      $imagens = Imagens::where('tags',$tag);
      return view('pesquisa',compact('imagens'));
    }
    // public function adicionar(){
    //   return view('adicionar');
    // }
    public function salvar(Request $req){
      $dados = $req->all();
      // dd($dados);
      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $dir = "img/";
        $name = $imagem->getClientOriginalName();
        $imagem->move($dir, $name);
        $dados['imagem'] = $dir.$name;
      }
      // dd($dados);
      Imagens::create($dados);
      // dd(Imagens::all());
      return redirect()->route('index');
    }
    // public function editar($id){
    //   $imagens = Imagens::find($id);
    //   return view('editar',compact('imagens'));
    // }
    // public function atualizar(Request $req, $id){
    //   $dados = $req->all();
    //   if ($req->hasFile('imagem')) {
    //     $imagem = $req->file('imagem');
    //     $dir = "img/";
    //     $name = $imagem->getClientOriginalName();
    //     $imagem->move($dir, $name);
    //     $dados['imagem'] = $dir.$name;
    //   }
    //   Imagens::find($id)->update($dados);
    //
    //   return redirect()->route('index');
    // }
    // public function deletar($id){
    //   Imagens::find($id)->delete();
    //   return redirect()->route('index');
    // }
    // public function download($id){
    //   $imagens = Imagens::find($id);
    //   return view('download',compact('imagens'));
    // }
    // public function downloadTipo($id, $tipo){
    //   $imagens = Imagens::find($id);
    //   $caminho = $imagens->path.$tipo.'\\'.substr($imagens->imagem,4,-3).$tipo;
    //   if (file_exists($caminho)) {
    //     return response()->download($caminho, $imagens->nome.'.'.$tipo);
    //   }else{
    //     return redirect()->route('download', $id);
    //   }
}
