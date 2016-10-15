<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('sobrenome', 45)->nullable();
            $table->dateTime('datanasc')->nullable();
            $table->string('email', 45);
            $table->string('password');
            $table->char('genero', 1)->nullable();
            $table->string('cpf', 11);
            $table->string('telefone', 11)->nullable();
            $table->string('logradouro', 45)->nullable();
            $table->string('cep', 11)->nullable();
            $table->string('bairro', 45)->nullable();
            $table->string('cidade', 45)->nullable();
            $table->string('estado', 45)->nullable();
            $table->string('news', 2)->nullable();
            $table->binary('img', 2)->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
