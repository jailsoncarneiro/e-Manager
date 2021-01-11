<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('codtel')->nullable();
            $table->string('nome');
            $table->string('name')->nullable();
            $table->char('sigla', 2)->nullable();
            $table->char('moeda', 3)->nullable();
            $table->string('moedasimbolo', 3)->nullable();
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
        Schema::dropIfExists('paises');
    }
}
