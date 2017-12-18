<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
  protected $fillable = [
      'nome', 'tags', 'imagem'
  ];
}
