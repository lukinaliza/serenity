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
            $table->date('date');
            $table->time('time');    
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');  
            $table->unsignedBigInteger('master_id');
            $table->foreign('master_id')->references('id')->on('masters');       
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