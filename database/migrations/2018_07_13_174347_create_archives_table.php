<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_archives', function (Blueprint $table) {
            $table->increments('id_archive');
            $table->double('total_in_archive');
            $table->double('total_out_archive');
            $table->double('solde_depart_archive');
            $table->double('solde_actuel_archive');
            $table->double('diff_archive');
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
        Schema::dropIfExists('tbl_archives');
    }
}
