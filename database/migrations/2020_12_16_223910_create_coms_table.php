<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coms', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedTinyInteger('op');
            $table->timestamp('emissao')->useCurrent();
            $table->char('orig', 1)->nullable();
            $table->unsignedBigInteger('idfilial')->nullable();
            $table->timestamp('datafat')->nullable();
            $table->char('defpreco', 1)->nullable();
            $table->string('numero', 50)->nullable();
            $table->unsignedBigInteger('idcad');
            $table->string('nomeemail', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->char('tipocad', 1);
            $table->unsignedBigInteger('idrep')->nullable();
            $table->unsignedBigInteger('idatend')->nullable();
            $table->string('respcom', 20)->nullable();
            $table->string('endcobcep', 8)->nullable();
            $table->string('endcob', 100)->nullable();
            $table->string('endcobnum', 10)->nullable();
            $table->string('endcobcompl', 20)->nullable();
            $table->string('endcobbairro', 30)->nullable();
            $table->unsignedBigInteger('endcobidcid')->nullable();
            $table->string('endent', 100)->nullable();
            $table->string('endentnum', 10)->nullable();
            $table->string('endentcompl', 20)->nullable();
            $table->string('endentbairro', 30)->nullable();
            $table->unsignedBigInteger('endentidcid')->nullable();
            $table->string('endentcep', 8)->nullable();
            $table->string('tel1', 11)->nullable();
            $table->string('tel2', 11)->nullable();
            $table->string('tel3', 11)->nullable();
            $table->string('cpfcnpj', 20)->nullable();
            $table->string('rginscest', 20)->nullable();
            $table->string('inscmun', 20)->nullable();
            $table->unsignedBigInteger('idtransp')->nullable();
            $table->char('formaret', 1)->nullable();
            $table->char('fretetipo', 1)->nullable();
            $table->decimal('fretetaxa', 6)->unsigned()->nullable();
            $table->decimal('fretepeso', 6)->unsigned()->nullable();
            $table->decimal('fretevol', 6)->unsigned()->nullable();
            $table->decimal('fretemin', 6)->unsigned()->nullable();
            $table->decimal('peso')->unsigned()->nullable();
            $table->unsignedTinyInteger('volumes')->nullable();
            $table->string('horario', 20)->nullable();
            $table->decimal('subtotalbr', 10)->unsigned()->nullable();
            $table->decimal('percacres', 6)->unsigned()->nullable();
            $table->decimal('acres')->unsigned()->nullable();
            $table->string('obsacres', 20)->nullable();
            $table->decimal('percdescon', 6)->unsigned()->nullable();
            $table->decimal('descon')->unsigned()->nullable();
            $table->string('obsdescon', 20)->nullable();
            $table->decimal('bcicmsisssim', 10)->unsigned()->nullable();
            $table->decimal('percicmsisssim', 6)->unsigned()->nullable();
            $table->decimal('icmsisssim')->unsigned()->nullable();
            $table->decimal('bcicmsst', 10)->unsigned()->nullable();
            $table->decimal('percicmsst', 6)->unsigned()->nullable();
            $table->decimal('icmsst')->unsigned()->nullable();
            $table->decimal('fretetotal')->unsigned()->nullable();
            $table->decimal('fretepercicms', 6)->unsigned()->nullable();
            $table->decimal('freteicms')->unsigned()->nullable();
            $table->decimal('bcipi', 10)->unsigned()->nullable();
            $table->decimal('percipi', 6)->unsigned()->nullable();
            $table->decimal('ipi')->unsigned()->nullable();
            $table->decimal('subtotal', 10)->unsigned()->nullable();
            $table->decimal('total', 10)->unsigned()->nullable();
            $table->string('observacoes', 240)->nullable();
            $table->string('obscliente', 240)->nullable();
            $table->unsignedTinyInteger('idccor')->nullable();
            $table->char('condpagto', 1)->nullable();
            $table->char('parcelas', 2)->nullable();
            $table->decimal('entrada')->unsigned()->nullable();
            $table->date('primvenc')->nullable();
            $table->unsignedTinyInteger('intvenc')->nullable();
            $table->string('tipomarca', 20)->nullable();
            $table->string('modelo', 20)->nullable();
            $table->unsignedBigInteger('idacond')->nullable();
            $table->string('numserie', 20)->nullable();
            $table->string('solicitacoes', 240)->nullable();
            $table->string('infequipamento', 240)->nullable();
            $table->string('laudotecnico', 240)->nullable();
            $table->string('ctrstatus', 2)->nullable()->default('EA');
            $table->string('solvencia', 2);
            $table->decimal('implantacao', 10)->unsigned();
            $table->decimal('dinheiro', 10)->unsigned()->nullable();
            $table->decimal('boleto', 10)->unsigned()->nullable();
            $table->decimal('cartaodebito', 10)->unsigned()->nullable();
            $table->decimal('cartaocredito', 10)->unsigned()->nullable();
            $table->decimal('deposito', 10)->unsigned()->nullable();
            $table->decimal('transferencia', 10)->unsigned()->nullable();
            $table->decimal('areceber', 10)->unsigned()->nullable();
            $table->decimal('totalpago', 10)->unsigned()->nullable();
            $table->decimal('troco', 10)->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coms');
    }
}
