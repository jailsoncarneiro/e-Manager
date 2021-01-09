<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatuscomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuscoms', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->unsignedTinyInteger('op');
            $table->string('status', 50);
            $table->char('est', 1);
            $table->char('fin', 1);
            $table->string('obs', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuscoms');
    }
}
