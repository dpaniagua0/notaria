<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditDateFieldsEscrituras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('escrituras', function($table){
            $table->dropColumn(['upload_date','arrive_date']);
            $table->dateTime('upload_date');
            $table->dateTime('arrived_date');
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
