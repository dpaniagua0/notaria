<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocationFieldsDeclaranot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('declaranots', function($table){
            $table->string('street2')->after('zip_code');
            $table->string('colony2')->after('street2');
            $table->string('state2')->after('colony2');
            $table->string('district2')->after('state2');
            $table->string('zip_code2')->after('district2');
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
