<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->text('img')->nullable();
            $table->unsignedBigInteger('fk')->index('fk_cats_subcats_subs_fk');
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
        Schema::dropIfExists('subcats');
    }
}
