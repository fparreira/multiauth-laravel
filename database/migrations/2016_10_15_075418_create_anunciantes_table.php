<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anunciantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomefantasia', 45);
            $table->string('razaosocial', 45)->nullable();
            $table->string('cnpj', 11);
            $table->string('email', 50);
            $table->string('telefone', 11)->nullable();
            $table->string('password');
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
        Schema::dropIfExists('anunciantes');
    }
}
