<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandeirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandeiras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bandeira', 100);
            $table->decimal('percdesc')->unsigned();
            $table->unsignedBigInteger('idccor')->index('fk_bandeiras_idccor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandeiras');
    }
}
