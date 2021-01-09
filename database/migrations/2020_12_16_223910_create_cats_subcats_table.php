<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsSubcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats_subcats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idsubcat');
            $table->unsignedBigInteger('fk')->index('fk_cats_subcats_idsubcat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats_subcats');
    }
}
