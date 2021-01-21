<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComsFatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coms_fats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->decimal('valorbr', 10)->unsigned();
            $table->decimal('percdesconto', 6)->unsigned();
            $table->decimal('desconto')->unsigned();
            $table->decimal('valor', 10)->unsigned();
            $table->unsignedBigInteger('numeronf');
            $table->string('modelonf', 2);
            $table->string('serienf', 2);
            $table->unsignedTinyInteger('volumes');
            $table->unsignedBigInteger('idempresa');
            $table->char('condpagto', 1);
            $table->unsignedTinyInteger('parcelas');
            $table->unsignedTinyInteger('intvenc');
            $table->char('entrada', 1);
            $table->unsignedSmallInteger('primvenc');
            $table->date('dataprimvenc');
            $table->unsignedBigInteger('idatendente');
            $table->string('endentrega', 160);
            $table->string('endcobranca', 160);
            $table->decimal('frete')->unsigned();
            $table->unsignedBigInteger('idtransportadora');
            $table->decimal('totalfrete')->unsigned();
            $table->timestamp('preventrega')->useCurrent();
            $table->string('observacoes');
            $table->timestamp('dataaprovacao')->nullable();
            $table->unsignedBigInteger('idrespaprovacao');
            $table->char('gerafin', 1);
            $table->timestamp('datasaida')->nullable();
            $table->unsignedBigInteger('idrespsaida');
            $table->timestamp('dataentrega')->nullable();
            $table->unsignedBigInteger('idrespentrega');
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
        Schema::dropIfExists('coms_fats');
    }
}
