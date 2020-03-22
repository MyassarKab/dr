<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('titel_en')->unique();
          $table->string('titel_ar')->unique();
          $table->string('slug_en')->unique();
          $table->string('slug_ar')->unique();
          $table->text('description_en');
          $table->text('description_ar');
          $table->text('details_en');
          $table->text('details_ar');
          $table->integer('love')->default(0);
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          $table->tinyInteger('status')->default(0);
          $table->date('published');
          $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
