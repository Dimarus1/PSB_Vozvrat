<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePSBLaravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_s_b_laravels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('AMOUNT')-> nullable(true);
            $table->text('CURRENCY')-> nullable(true);
            $table->text('ORDER')-> nullable(true);
            $table->text('DESC')-> nullable(true);
            $table->text('MERCH_NAME')-> nullable(true);
            $table->text('MERCHANT')-> nullable(true);
            $table->text('TERMINAL')-> nullable(true);
            $table->text('EMAIL')-> nullable(true);
            $table->text('TRTYPE')-> nullable(true);
            $table->text('TIMESTAMP')-> nullable(true);
            $table->text('NONCE')-> nullable(true);
            $table->text('BACKREF')-> nullable(true);
            $table->text('RESULT')-> nullable(true);
            $table->text('RC')-> nullable(true);
            $table->text('RCTEXT')-> nullable(true);
            $table->text('AUTHCODE')-> nullable(true);
            $table->text('RRN')-> nullable(true);
            $table->text('INT_REF')-> nullable(true);
            $table->text('P_SIGN')-> nullable(true);
            $table->text('NAME')-> nullable(true);
            $table->text('CARD')-> nullable(true);
            $table->text('CHANNEL')-> nullable(true);
            $table->text('ADDINFO')-> nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_s_b_laravels');
    }
}
