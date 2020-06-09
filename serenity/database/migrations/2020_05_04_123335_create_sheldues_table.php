<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelduesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheldues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('date');
            $table->unsignedBigInteger('price_line_id');
            $table->foreign('price_line_id')->references('id')->on('pricelist_lines');
            $table->unsignedBigInteger('spec_id');
            $table->foreign('spec_id')->references('id')->on('specializations');
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
        Schema::dropIfExists('sheldues');
    }
}
