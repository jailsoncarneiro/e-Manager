<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idrem')->index('fk_agendas_idrem');
            $table->unsignedBigInteger('iddest')->index('fk_agendas_iddest');
            $table->string('assunto', 100);
            $table->mediumText('descricao')->nullable();
            $table->dateTime('data');
            $table->dateTime('prevenc');
            $table->string('status', 20);
            $table->dateTime('dataenc')->nullable();
            $table->unsignedTinyInteger('nivelpriv')->nullable()->default(1);
            $table->unsignedBigInteger('idcad')->nullable()->index('fk_agendas_idcad');
            $table->char('expainel', 1)->default('N');
            $table->char('recorrente', 1)->default('N');
            $table->dateTime('exinicio')->nullable();
            $table->char('exseg', 1)->nullable()->default('S');
            $table->char('exter', 1)->nullable()->default('S');
            $table->char('exqua', 1)->nullable()->default('S');
            $table->char('exqui', 1)->nullable()->default('S');
            $table->char('exsex', 1)->nullable()->default('S');
            $table->char('exsab', 1)->nullable()->default('S');
            $table->char('exdom', 1)->nullable()->default('S');
            $table->char('situacao', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
