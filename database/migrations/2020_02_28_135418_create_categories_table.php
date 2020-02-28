<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique()->comment('種類名稱');
            $table->timestamps();
        });

        Schema::create('news_category', function (Blueprint $table) {
            $table->integer('news_id')->comment('新聞id');
            $table->integer('category_id')->comment('種類id');
            $table->primary(['news_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('news_category');
    }
}
