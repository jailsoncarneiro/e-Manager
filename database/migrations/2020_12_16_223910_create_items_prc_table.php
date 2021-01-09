<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsPrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_prc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('qtd', 10)->unsigned();
            $table->decimal('preco', 10)->unsigned();
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
        Schema::dropIfExists('items_prc');
    }
}
