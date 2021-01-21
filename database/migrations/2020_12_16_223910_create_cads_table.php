<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idman')->nullable();
            $table->string('codigo', 20)->nullable();
            $table->char('pessoa', 1)->nullable();
            $table->string('nome', 100);
            $table->string('razaosocial', 100)->nullable();
            $table->string('apelido', 50)->nullable();
            $table->unsignedBigInteger('idendcob')->nullable()->index('fk_cads_idendcob');
            $table->unsignedBigInteger('idendent')->nullable()->index('fk_cads_idendent');
            $table->string('tel1', 11)->nullable();
            $table->unsignedTinyInteger('tel1idop')->nullable()->index('fk_cads_tel1idop');
            $table->string('tel1obs', 10)->nullable();
            $table->string('tel2', 11)->nullable();
            $table->unsignedTinyInteger('tel2idop')->nullable()->index('fk_cads_tel2idop');
            $table->string('tel2obs', 10)->nullable();
            $table->string('tel3', 11)->nullable();
            $table->unsignedTinyInteger('tel3idop')->nullable()->index('fk_cads_tel3idop');
            $table->string('tel3obs', 10)->nullable();
            $table->string('email', 240)->nullable();
            $table->string('horario', 50)->nullable();
            $table->string('respcompras', 30)->nullable();
            $table->string('site', 240)->nullable();
            $table->date('datanasc')->nullable();
            $table->string('cpfcnpj', 18)->nullable();
            $table->string('rginscest', 20)->nullable();
            $table->string('inscmun', 20)->nullable();
            $table->char('tipocliente', 1)->nullable();
            $table->string('usuario')->nullable();
            $table->string('senha')->nullable();
            $table->unsignedInteger('nivel');
            $table->dateTime('relacdesde')->nullable();
            $table->decimal('limcred', 10)->unsigned()->nullable();
            $table->char('cl', 1)->default('N');
            $table->char('co', 1)->default('S');
            $table->char('em', 1)->default('N');
            $table->char('so', 1)->default('N');
            $table->char('an', 1)->default('N');
            $table->char('fo', 1)->default('N');
            $table->char('fa', 1)->default('N');
            $table->char('re', 1)->default('N');
            $table->char('fu', 1)->default('N');
            $table->char('tr', 1)->default('N');
            $table->char('us', 1)->default('S');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('cads');
    }
}
