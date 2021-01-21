<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComsStsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coms_sts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('data')->useCurrent();
            $table->unsignedBigInteger('idstatus');
            $table->string('obs', 240)->nullable();
            $table->unsignedBigInteger('idresp');
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
        Schema::dropIfExists('coms_sts');
    }
}
