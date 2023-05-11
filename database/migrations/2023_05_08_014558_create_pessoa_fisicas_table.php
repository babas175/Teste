<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaFisicasTable extends Migration
{
    public function up()
    {
        Schema::create('pessoa_fisica', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('cpf');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('job');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoa_fisicas');
    }
}
