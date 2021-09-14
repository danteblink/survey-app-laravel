<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsPersonales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personales', function (Blueprint $table) {
                    $table->string('areaPeciti');
                    $table->string('areaSni');
                    $table->string('areaConocimiento');
                    $table->string('numeroRcea');
                    $table->string('numeroCvu');

                  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personales',function($table){
                   $table->dropColumn('areaPeciti');
                   $table->dropColumn('areaSni');
                   $table->dropColumn('areaConocimiento');
                   $table->dropColumn('numeroRcea');
                   $table->dropColumn('numeroCvu');
                });
    }
}
