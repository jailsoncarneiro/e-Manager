<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsFornsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_forns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idcad');
            $table->string('codigo', 20)->nullable();
            $table->string('descricao', 240)->nullable();
            $table->decimal('prunitario', 10)->nullable();
            $table->char('cotacao', 1)->nullable()->default('N');
            $table->string('obs', 100)->nullable();
            $table->bigInteger('fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_forns');
    }
}
