<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsPergsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_pergs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('data')->useCurrent();
            $table->string('visitante', 50);
            $table->string('email', 100);
            $table->char('recresposta', 1)->default('S');
            $table->char('recofertas', 1)->default('S');
            $table->unsignedBigInteger('idvisitante')->nullable();
            $table->string('pergunta', 300);
            $table->timestamp('dataresposta')->nullable();
            $table->string('resposta', 300)->nullable();
            $table->unsignedBigInteger('idpeavresp')->nullable();
            $table->unsignedBigInteger('idavresp')->nullable();
            $table->string('avresp', 300)->nullable();
            $table->timestamp('dataavresp')->nullable();
            $table->char('bloqueado', 1)->default('N');
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
        Schema::dropIfExists('items_pergs');
    }
}
