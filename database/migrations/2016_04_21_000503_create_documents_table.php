<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function($table){
            $table->bigIncrements('id');
            $table->string('client_name');
            $table->string('file_number');
            $table->dateTime('upload_date');
            $table->dateTime('arrive_date');
            $table->double('price');
            $table->text('observations');
            $table->string('clg_archive');
            $table->string('clg_register');
            $table->integer('check')->default(0);
            $table->integer('signed')->default(0);
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('promoter_id')->unsigned();
            $table->foreign('promoter_id')->references('id')->on('users')->onDelete('cascade');
        
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
