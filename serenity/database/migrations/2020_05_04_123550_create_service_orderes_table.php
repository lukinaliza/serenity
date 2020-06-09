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
            $table->unsignedBigInteger('sheldue_id')->unique();
            $table->foreign('sheldue_id')->references('id')->on('sheldues');
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
