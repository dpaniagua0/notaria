<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnajenanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enajenantes', function($table){
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('rfc')->nullable();
            $table->string('curp');

            $table->bigInteger('declaranot_id')->unsigned();
            $table->foreign('declaranot_id')->references('id')->on('declaranots')->onDelete('cascade');


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
        //
    }
}
