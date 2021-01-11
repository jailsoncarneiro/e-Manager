<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsCompsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_comps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo', 20);
            $table->unsignedBigInteger('iditem')->nullable();
            $table->string('descricao', 100);
            $table->decimal('qtdref', 10, 4)->unsigned();
            $table->decimal('qtd', 10, 4)->unsigned();
            $table->decimal('valor', 10, 4)->unsigned();
            $table->char('baixaaut', 1)->default('S');
            $table->unsignedBigInteger('fk');
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
        Schema::dropIfExists('items_comps');
    }
}
