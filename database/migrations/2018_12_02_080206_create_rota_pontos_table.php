<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotaPontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rota_pontos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rota_id')->unsigned();
            $table->foreign('rota_id')->references('id')->on('rotas');
            $table->integer('ponto_id')->unsigned()->nullable();
            $table->foreign('ponto_id')->references('id')->on('pontos');
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
        Schema::dropIfExists('rota_pontos');
    }
}
