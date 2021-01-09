<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanocontasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planocontas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 20)->nullable();
            $table->string('cod', 10);
            $table->string('conta', 100);
            $table->char('tipo', 1);
            $table->char('sian', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planocontas');
    }
}
