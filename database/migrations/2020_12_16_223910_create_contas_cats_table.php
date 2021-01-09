<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_cats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idcat');
            $table->unsignedBigInteger('idccusto');
            $table->decimal('valor', 10)->unsigned();
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
        Schema::dropIfExists('contas_cats');
    }
}
