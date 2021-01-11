<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('tipo', 1);
            $table->timestamp('emissao')->useCurrent();
            $table->char('tipodoc', 2);
            $table->unsignedBigInteger('idbandeira')->nullable();
            $table->unsignedBigInteger('idccor')->nullable();
            $table->string('numero', 20)->nullable();
            $table->unsignedBigInteger('nossonumero')->nullable();
            $table->string('linhadigitavel', 240)->nullable();
            $table->unsignedBigInteger('idremessa')->nullable();
            $table->unsignedBigInteger('idretorno')->nullable();
            $table->unsignedBigInteger('idbanco')->nullable();
            $table->unsignedBigInteger('idcad');
            $table->string('historico', 240);
            $table->decimal('valor', 10)->unsigned();
            $table->date('vencimento');
            $table->unsignedBigInteger('prazo')->nullable();
            $table->char('parcela', 2)->nullable();
            $table->decimal('quitado', 10)->unsigned()->nullable();
            $table->decimal('naoquitado', 10)->unsigned()->nullable();
            $table->decimal('juros')->unsigned()->nullable();
            $table->decimal('multa')->unsigned()->nullable();
            $table->decimal('valortotal', 10)->unsigned();
            $table->string('chccor', 10)->nullable();
            $table->string('chcpfcnpj', 18)->nullable();
            $table->string('chrgie', 20)->nullable();
            $table->unsignedBigInteger('chidcidade')->nullable();
            $table->string('chtelefone', 20)->nullable();
            $table->unsignedBigInteger('idfilial');
            $table->string('observacoes', 100)->nullable();
            $table->unsignedBigInteger('fks');
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
        Schema::dropIfExists('contas');
    }
}
