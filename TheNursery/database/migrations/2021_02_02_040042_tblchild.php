<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tblchild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tblchildren', function (Blueprint $table) {
            $table->bigIncrements('ChildID');
            $table->string('Child_fname')->nullable();
            $table->string('Child_lname')->nullable();
            $table->string('Child_gender')->nullable();
            $table->string('Child_DOB')->nullable();
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
