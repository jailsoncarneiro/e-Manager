<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadsLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cads_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('data');
            $table->unsignedBigInteger('idcad')->index('fk_cads_logs_idcad');
            $table->string('pcname', 50)->nullable();
            $table->string('pclocalip', 15)->nullable();
            $table->string('pcremip', 15)->nullable();
            $table->string('pcuser', 50)->nullable();
            $table->string('sistema', 50)->nullable();
            $table->string('versao', 20)->nullable();
            $table->string('versaoat', 20)->nullable();
            $table->string('tabela', 50)->nullable();
            $table->string('op', 50)->nullable();
            $table->unsignedInteger('opid')->nullable();
            $table->text('cmd')->nullable();
            $table->text('jsondata')->nullable();
            $table->text('jsondatab')->nullable();
            $table->string('tabelad', 50)->nullable();
            $table->unsignedBigInteger('tabeladopid')->nullable();
            $table->string('tabeladrem', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cads_logs');
    }
}
