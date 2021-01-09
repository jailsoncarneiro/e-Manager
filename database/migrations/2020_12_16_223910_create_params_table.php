<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('params', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedBigInteger('idfilial')->nullable();
            $table->string('filtro_status', 50)->nullable();
            $table->integer('filtro_qtddias')->nullable();
            $table->char('ramo', 2);
            $table->string('titulopagina', 30);
            $table->string('descricao', 240);
            $table->string('keywords', 200)->nullable();
            $table->string('quemsomos', 600)->nullable();
            $table->longText('logo');
            $table->char('endcep', 8);
            $table->string('end', 50);
            $table->string('endnum', 10);
            $table->string('endcompl', 10);
            $table->string('endbairro', 40);
            $table->string('endcid', 50);
            $table->char('enduf', 2);
            $table->string('endpais', 20);
            $table->char('end2cep', 8)->nullable();
            $table->string('end2', 50)->nullable();
            $table->string('end2num', 10)->nullable();
            $table->string('end2compl', 10)->nullable();
            $table->string('end2bairro', 40)->nullable();
            $table->string('end2cid', 50)->nullable();
            $table->char('end2uf', 2)->nullable();
            $table->string('end2pais', 20)->nullable();
            $table->char('end3cep', 8)->nullable();
            $table->string('end3', 50)->nullable();
            $table->string('end3num', 10)->nullable();
            $table->string('end3compl', 10)->nullable();
            $table->string('end3bairro', 40)->nullable();
            $table->string('end3cid', 50)->nullable();
            $table->char('end3uf', 2)->nullable();
            $table->string('end3pais', 20)->nullable();
            $table->string('hostadress', 100)->nullable();
            $table->string('telvendas1', 11);
            $table->string('obstelvendas1', 20);
            $table->string('telvendas2', 11);
            $table->string('obstelvendas2', 20);
            $table->string('telvendas3', 11);
            $table->string('obstelvendas3', 20);
            $table->string('telfin', 11);
            $table->string('obstelfin', 20);
            $table->string('telcompras', 11);
            $table->string('obstelcompras', 20);
            $table->string('telsac1', 11);
            $table->string('obstelsac1', 20);
            $table->string('telsac2', 11);
            $table->string('obstelsac2', 20);
            $table->char('formaret', 1)->nullable();
            $table->bigInteger('idtransp')->nullable();
            $table->unsignedBigInteger('idfilialtransp')->nullable();
            $table->string('emailvendas', 100);
            $table->string('emailfin', 100);
            $table->string('emailcompras', 100);
            $table->string('emailsac', 100);
            $table->string('emailvendasint', 100);
            $table->string('emaildocs', 240)->nullable();
            $table->string('smtpemail', 100);
            $table->string('smtpserver', 100)->nullable();
            $table->smallInteger('smtpport')->nullable();
            $table->string('smtpuser', 100)->nullable();
            $table->string('smtppsd', 20)->nullable();
            $table->string('smtpcripto', 3)->nullable();
            $table->string('fcbk', 200);
            $table->string('twtr', 50);
            $table->string('mensvendas', 100)->nullable();
            $table->longText('slide1')->nullable();
            $table->string('slide2', 100);
            $table->string('slide3', 100);
            $table->string('slide4', 100);
            $table->string('ptfsrv', 100);
            $table->string('ptfusr', 20);
            $table->string('ptfpsd', 20);
            $table->string('admusr', 20)->nullable();
            $table->string('admpsd', 20)->nullable();
            $table->string('email_admin', 255)->nullable();
            $table->string('email_adminag', 255)->nullable();
            $table->string('dbhost', 50)->nullable();
            $table->string('dbuser', 50)->nullable();
            $table->string('dbpass', 50)->nullable();
            $table->string('dbname', 50)->nullable();
            $table->dateTime('dataultbck')->nullable();
            $table->dateTime('dataultenvag')->nullable();
            $table->integer('ft_fin_fll')->nullable();
            $table->integer('ft_fin_int')->nullable();
            $table->string('ft_fin_fpg', 200)->nullable();
            $table->string('ft_fin_stt', 200)->nullable();
            $table->integer('ft_cnt_fll')->nullable();
            $table->string('ft_cnt_int', 100)->nullable();
            $table->string('ft_cnt_slv', 100)->nullable();
            $table->string('ft_cnt_stt', 100)->nullable();
            $table->string('pastaadmin', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('params');
    }
}
