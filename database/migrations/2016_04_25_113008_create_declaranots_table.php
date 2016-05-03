<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeclaranotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaranots', function($table){
            $table->bigIncrements('id');
            $table->bigInteger('file_number');
            $table->date('upload_date');
            $table->date('sign_date')->nullable();
            $table->integer('type');
            $table->string('street');
            $table->string('colony');
            $table->string('state');
            $table->string('zip_code');

            $table->text('description');
            $table->integer('exception');

            $table->double('iva_quote')->nullable();
            $table->double('isr_quote')->nullable();
            $table->double('price')->nullable();
            
            $table->bigInteger('concepto_id')->unsigned();
            $table->foreign('concepto_id')->references('id')->on('conceptos')->onDelete('cascade');
        
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.daassadsa
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
