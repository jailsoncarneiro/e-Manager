<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('conta', 20);
            $table->string('numero')->nullable();
            $table->string('numerodig', 2)->nullable();
            $table->string('agencia', 10)->nullable();
            $table->string('agenciadig', 2)->nullable();
            $table->string('agencianome', 50)->nullable();
            $table->unsignedBigInteger('idcid')->nullable()->index('fk_ccors_idcid');
            $table->unsignedBigInteger('idbanco')->nullable()->index('fk_ccors_idbanco');
            $table->string('codcedente', 20)->nullable();
            $table->unsignedBigInteger('idfilial')->nullable()->index('fk_ccors_idfilial');
            $table->unsignedBigInteger('idcad');
            $table->char('tipominimo', 1)->nullable();
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
        Schema::dropIfExists('ccors');
    }
}
