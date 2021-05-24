<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseas_sub_categories', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->longText('sub_category_name');
            $table->string('category_code');
            $table->foreign('category_code')->references('id')->on('diseas_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diseas_sub_categories');
    }
}
