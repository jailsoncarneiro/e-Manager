<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasStsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_sts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('data')->useCurrent();
            $table->unsignedBigInteger('idstatus');
            $table->char('fin', 1)->nullable();
            $table->char('est', 1)->nullable();
            $table->char('final', 1)->nullable();
            $table->unsignedBigInteger('idresp');
            $table->string('obs')->nullable();
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
        Schema::dropIfExists('contas_sts');
    }
}
