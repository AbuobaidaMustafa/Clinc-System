<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_groups', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->longText('group_name');
            $table->string('subcat_code');
            $table->foreign('subcat_code')->references('id')->on('drug_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_groups');
    }
}
