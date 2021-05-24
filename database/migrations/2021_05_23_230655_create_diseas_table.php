<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseas', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->longText('diseas');
            $table->string('subcat_code');
            $table->foreign('subcat_code')->references('id')->on('diseas_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diseas');
    }
}
