<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coms_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('iditem');
            $table->string('codigo', 20)->nullable();
            $table->string('descricao', 240);
            $table->decimal('qtd', 10, 4)->unsigned();
            $table->string('un', 5);
            $table->char('dp', 1)->nullable()->default('N');
            $table->decimal('prunit')->unsigned();
            $table->decimal('subtotalbr', 10)->unsigned();
            $table->decimal('percacres', 6)->unsigned();
            $table->decimal('acres')->unsigned();
            $table->decimal('percdescon', 6)->unsigned();
            $table->decimal('descon')->unsigned();
            $table->decimal('subtotal')->unsigned();
            $table->unsignedBigInteger('idpedforn')->nullable();
            $table->unsignedTinyInteger('itempf')->nullable();
            $table->char('condpagtopf', 1)->nullable();
            $table->unsignedBigInteger('idccusto')->nullable();
            $table->unsignedBigInteger('idcat')->nullable();
            $table->unsignedInteger('garantiakm')->nullable();
            $table->unsignedInteger('garantiadias')->nullable();
            $table->decimal('custo', 10)->unsigned()->nullable();
            $table->decimal('comissoes', 10)->unsigned()->nullable();
            $table->decimal('percicms', 6)->unsigned();
            $table->decimal('icms')->unsigned();
            $table->decimal('percicmsst', 6)->unsigned();
            $table->decimal('icmsst')->unsigned();
            $table->decimal('frete')->unsigned();
            $table->decimal('percipi', 6)->unsigned();
            $table->decimal('ipi')->unsigned();
            $table->decimal('total', 10)->unsigned();
            $table->decimal('tributos')->unsigned()->nullable();
            $table->decimal('despfin')->unsigned()->nullable();
            $table->decimal('percmcmin', 6)->unsigned()->nullable();
            $table->decimal('percmc', 6);
            $table->decimal('mc', 10);
            $table->dateTime('preventrega')->nullable();
            $table->unsignedBigInteger('idstatus')->nullable();
            $table->dateTime('datastatus')->nullable();
            $table->string('obs', 200)->nullable();
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
        Schema::dropIfExists('coms_items');
    }
}
