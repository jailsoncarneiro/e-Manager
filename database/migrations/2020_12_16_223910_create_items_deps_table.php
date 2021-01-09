<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsDepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_deps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idcad');
            $table->string('depoimento');
            $table->unsignedTinyInteger('nota');
            $table->char('bloq', 1)->default('N');
            $table->unsignedBigInteger('fk')->index('fk_items_deps_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_deps');
    }
}
