<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name_en');
             $table->string('name_ar');
             $table->text('detalis_en');
             $table->text('detalis_ar');
             $table->string('specialist_en');
             $table->string('specialist_ar');
             $table->string('image');
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
        Schema::dropIfExists('doctors');
    }
}
