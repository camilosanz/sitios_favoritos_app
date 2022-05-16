<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('favoritos', function (Blueprint $table){

            $table->engine="InnoDB";
            $table->id();
            $table->string('url');
            $table->string('titulo');
            $table->string('descripcion');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('visibilidad');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
