<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasDespsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas_desps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('valor', 10)->unsigned();
            $table->char('formapagto', 2);
            $table->mediumText('historico');
            $table->unsignedBigInteger('fk')->index('fk_agendas_desps_fk');
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
        Schema::dropIfExists('agendas_desps');
    }
}
