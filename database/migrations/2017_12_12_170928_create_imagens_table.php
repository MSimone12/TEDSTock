<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome');
          $table->string('path')->default("\\\\tlsbr.local\\ARQUIVOS\\FABRICA\\02_banco_imagens\\fabrica\\fontes\\");
          $table->string('tags');
          $table->string('imagem');
          $table->string('userup')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagens');
    }
}
