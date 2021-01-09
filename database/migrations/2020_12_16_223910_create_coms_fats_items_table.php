<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComsFatsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coms_fats_items', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('iditem');
            $table->decimal('qtd', 10, 4)->unsigned();
            $table->decimal('subtotalbr', 10)->unsigned();
            $table->decimal('desconto', 10)->unsigned()->nullable();
            $table->decimal('subtotallq', 10)->unsigned();
            $table->decimal('bcicms', 10)->unsigned()->nullable();
            $table->decimal('percicms', 10)->unsigned()->nullable();
            $table->decimal('icms', 10)->unsigned()->nullable();
            $table->decimal('bcissqn', 10)->unsigned()->nullable();
            $table->decimal('percissqn', 10)->unsigned()->nullable();
            $table->decimal('issqn', 10)->unsigned()->nullable();
            $table->decimal('percredbcicmsst', 10)->unsigned()->nullable();
            $table->decimal('percmvaicmsst', 10)->unsigned()->nullable();
            $table->decimal('bcicmsst', 10)->unsigned()->nullable();
            $table->decimal('percicmsst', 10)->unsigned()->nullable();
            $table->decimal('icmsst', 10)->unsigned()->nullable();
            $table->decimal('subtotal', 10)->unsigned();
            $table->decimal('percfrete', 10)->unsigned()->nullable();
            $table->decimal('frete', 10)->unsigned()->nullable();
            $table->decimal('percoutros', 10)->unsigned()->nullable();
            $table->decimal('outtros', 10)->unsigned()->nullable();
            $table->decimal('percipi', 10)->unsigned()->nullable();
            $table->decimal('ipi', 10)->unsigned()->nullable();
            $table->decimal('total', 10)->unsigned();
            $table->decimal('percinss', 10)->unsigned()->nullable();
            $table->decimal('inss', 10)->unsigned()->nullable();
            $table->decimal('percpis', 10)->unsigned()->nullable();
            $table->decimal('pis', 10)->unsigned()->nullable();
            $table->decimal('perccofins', 10)->unsigned()->nullable();
            $table->decimal('cofins', 10)->unsigned()->nullable();
            $table->decimal('perccsll', 10)->unsigned()->nullable();
            $table->decimal('csll', 10)->unsigned()->nullable();
            $table->decimal('percir', 10)->unsigned()->nullable();
            $table->decimal('ir', 10)->unsigned()->nullable();
            $table->decimal('percsimples', 10)->unsigned()->nullable();
            $table->decimal('simples', 10)->unsigned()->nullable();
            $table->decimal('perccom', 10)->unsigned()->nullable();
            $table->decimal('com', 10)->unsigned()->nullable();
            $table->decimal('perccomat', 10)->unsigned()->nullable();
            $table->decimal('comat', 10)->unsigned()->nullable();
            $table->decimal('perccomrep', 10)->unsigned()->nullable();
            $table->decimal('comrep', 10)->unsigned()->nullable();
            $table->decimal('perccomemp', 10)->unsigned()->nullable();
            $table->decimal('comemp', 10)->unsigned()->nullable();
            $table->decimal('perccomtec', 10)->unsigned()->nullable();
            $table->decimal('comtec', 10)->unsigned()->nullable();
            $table->decimal('perccomout', 10)->unsigned()->nullable();
            $table->decimal('comout', 10)->unsigned()->nullable();
            $table->decimal('percdespfin', 10)->unsigned()->nullable();
            $table->decimal('despfin', 10)->unsigned()->nullable();
            $table->decimal('custo', 10)->unsigned()->nullable();
            $table->decimal('percmcmin', 10)->unsigned()->nullable();
            $table->decimal('percmc', 10)->unsigned()->nullable();
            $table->decimal('mc', 10)->unsigned()->nullable();
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
        Schema::dropIfExists('coms_fats_items');
    }
}
