<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCadsLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cads_logs', function (Blueprint $table) {
            $table->foreign('idcad', 'fk_cads_logs_idcad')->references('id')->on('cads')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cads_logs', function (Blueprint $table) {
            $table->dropForeign('fk_cads_logs_idcad');
        });
    }
}
