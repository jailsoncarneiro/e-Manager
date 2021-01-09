<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('emissao')->useCurrent();
            $table->unsignedTinyInteger('ordem')->nullable();
            $table->string('foto', 300);
            $table->timestamp('datainicio')->useCurrent();
            $table->timestamp('datatermino')->useCurrent();
            $table->string('posicao', 100)->nullable();
            $table->string('link', 300)->nullable();
            $table->char('tipo', 1);
            $table->unsignedBigInteger('fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
