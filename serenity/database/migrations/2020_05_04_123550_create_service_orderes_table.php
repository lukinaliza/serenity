<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceOrderesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orderes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cheque_id');
            $table->foreign('cheque_id')->references('id')->on('cheques');
            $table->unsignedBigInteger('sheldue_id');
            $table->foreign('sheldue_id')->references('id')->on('sheldues');
            $table->unsignedBigInteger('price_line_id');
            $table->foreign('price_line_id')->references('id')->on('pricelist_lines');
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
        Schema::dropIfExists('service_orderes');
    }
}
