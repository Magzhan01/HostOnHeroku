<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_details', function (Blueprint $table) {
            $table->id();
             //$table->integer('item_id')->unsigned();
           // $table->foreign('item_id')->references('id')->on('items');
           $table->foreignId('client_id')->constrained();
           $table->string('filename');
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
        Schema::dropIfExists('clients_details');
    }
}
