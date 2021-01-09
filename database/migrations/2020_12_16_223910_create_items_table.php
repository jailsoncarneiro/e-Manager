<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idman');
            $table->string('codigo', 20);
            $table->unsignedBigInteger('idcat')->nullable();
            $table->unsignedBigInteger('idsubcat')->nullable();
            $table->string('descricao', 240);
            $table->string('descricaores');
            $table->mediumText('detalhes')->nullable();
            $table->decimal('precocusto', 10, 3)->unsigned();
            $table->decimal('perclucro')->unsigned()->nullable();
            $table->decimal('frete', 10)->unsigned()->nullable();
            $table->decimal('tributos', 10)->unsigned()->nullable();
            $table->decimal('comissoes', 10)->unsigned()->nullable();
            $table->decimal('despfin', 6)->unsigned()->nullable();
            $table->decimal('prvendamin', 10)->unsigned()->nullable();
            $table->decimal('mcmin', 10)->unsigned()->nullable();
            $table->string('formapagto', 240);
            $table->char('disponivel', 1);
            $table->char('expripag', 1);
            $table->decimal('peso', 8, 3)->unsigned()->nullable();
            $table->decimal('qtdpeso', 8, 3)->unsigned()->nullable();
            $table->decimal('est', 10)->nullable();
            $table->decimal('estmin', 10)->nullable();
            $table->decimal('estmax', 10)->unsigned();
            $table->string('une', 10)->nullable();
            $table->string('unc', 10)->nullable();
            $table->decimal('relunc', 10, 6)->unsigned()->nullable();
            $table->string('unv', 10)->nullable();
            $table->decimal('relunv', 10, 6)->unsigned()->nullable();
            $table->timestamp('datacadastro')->nullable();
            $table->unsignedBigInteger('idfabricante')->nullable();
            $table->unsignedBigInteger('idfornecedor')->nullable();
            $table->string('excliente', 1)->default('S');
            $table->string('prazoentrega', 20)->nullable();
            $table->string('cor', 20)->nullable();
            $table->string('tam', 20)->nullable();
            $table->string('prazo', 20)->nullable();
            $table->string('qtdmin', 30)->nullable();
            $table->char('defpreco', 1)->nullable();
            $table->char('defqtd', 1)->nullable();
            $table->decimal('qtdpadrao')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
