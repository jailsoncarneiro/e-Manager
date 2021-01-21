<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasPagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_pags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('emissao')->useCurrent();
            $table->date('data');
            $table->decimal('valor', 10)->unsigned();
            $table->decimal('jurosdesc')->nullable();
            $table->decimal('valortotal', 10)->unsigned();
            $table->string('tipodoc', 10);
            $table->unsignedBigInteger('idccor')->nullable();
            $table->unsignedBigInteger('idbandeira')->nullable();
            $table->char('condpagto', 2)->nullable();
            $table->unsignedTinyInteger('parcelas')->nullable();
            $table->decimal('taxas')->unsigned()->nullable();
            $table->decimal('valorliq', 10)->unsigned();
            $table->decimal('totalpago', 10)->unsigned();
            $table->decimal('troco')->unsigned();
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
        Schema::dropIfExists('contas_pags');
    }
}
