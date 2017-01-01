<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPropertyValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_property_values', function (Blueprint $table) {
          $table->increments('id');
          $table->string('value');

          $table->integer('product_property_id')->unsigned();
          $table->foreign('product_property_id')->references('id')->on('product_properties');

          $table->timestamps();
          $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('product_property_values');
    }
}
