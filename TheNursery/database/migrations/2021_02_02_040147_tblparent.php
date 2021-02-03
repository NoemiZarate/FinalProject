<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tblparent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblparents', function (Blueprint $table) {
            $table->bigIncrements('ParentID');
            $table->string('Father_fname')->nullable();
            $table->string('Father_lname')->nullable();
            $table->string('F_mobile_num')->nullable();
            $table->string('Mother_fname')->nullable();
            $table->string('Mother_lname')->nullable();
            $table->string('M_mobile_num')->nullable();
            $table->string('Parent_address')->nullable();
            $table->string('Parent_town')->nullable();
            $table->string('postcode')->nullable();
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
