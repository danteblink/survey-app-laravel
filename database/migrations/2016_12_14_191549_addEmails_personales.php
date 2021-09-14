<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailsPersonales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
       {
           Schema::table('personales', function (Blueprint $table) {
                       $table->string('emailI');
                       $table->string('emailP');
                     });
       }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
    Schema::table('personales',function($table){
                       $table->dropColumn('emailI');
                       $table->dropColumn('emailP');
                    });
    }
}
