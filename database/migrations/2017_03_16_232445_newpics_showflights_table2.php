<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewpicsShowflightsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgflights', function (Blueprint $table) {
            $table->text('affiliatepic1');
            $table->text('affiliatepic2');
            $table->text('affiliatepic3');
            $table->text('affiliatepic4');
            $table->text('affiliatepic5');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
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
        Schema::create('imgflights', function(Blueprint $table){
            $table->drop('imgflights');

        });
    }
}
