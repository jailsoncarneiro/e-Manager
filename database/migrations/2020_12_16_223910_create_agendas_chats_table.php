<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas_chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('conversa');
            $table->unsignedBigInteger('idrem')->index('fk_agendas_chats_idrem');
            $table->unsignedBigInteger('fk')->index('fk_agendas_chats_fk');
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
        Schema::dropIfExists('agendas_chats');
    }
}
