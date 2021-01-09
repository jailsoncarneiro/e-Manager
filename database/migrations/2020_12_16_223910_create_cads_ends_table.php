<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadsEndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cads_ends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao', 20);
            $table->char('cep', 8)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('compl', 20)->nullable();
            $table->string('bairro', 40)->nullable();
            $table->unsignedBigInteger('idcid')->nullable()->index('fk_cads_ends_idcid');
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
        Schema::dropIfExists('cads_ends');
    }
}
