<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->date('birth_date');
            $table->string('position');
            $table->integer('squad_number');
            $table->string('previous_club');
            $table->integer('jumlah_gol')->default(0); 
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

     public function down()
    {
        Schema::dropIfExists('teams');
    }
}
