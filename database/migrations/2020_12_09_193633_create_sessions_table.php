<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}


    id            bigint(20) not null unsigned,
    data          date not null,
    regtribfed    char(1) null,
    percissqn     decimal(6,2) null,
    percinss      decimal(6,2) null,
    percsimples   decimal(6,2) null,
    substtrib     char(1) null,
    contribipi    char(1) null,
    percbcirpj    decimal(6,2) null,
    percirpj      decimal(6,2) null,
    limadirpj     decimal(10,2) null,
    percadirpj    decimal(6,2) null,
    percbccsll    decimal(6,2) null,
    perccsll      decimal(6,2) null,
    recbrutamd    decimal(10,2) null,
    irpjmd        decimal(6,2) null,
    percirpjmd    decimal(6,2) null,
    csllmd        decimal(6,2) null,
    perccsllmd    decimal(6,2) null,
    gastofixo     decimal(10,2) null,
    percdespfin   decimal(6,2) null,
    capsocialint  decimal(10,2) null,
    capsocialsub  decimal(10,2) null,
    idresp        bigint() not null unsigned,
    observacao    varchar(100) null,
    fk            bigint(20) not null