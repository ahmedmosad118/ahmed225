<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingCompanyAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('shipping_company_agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phones');
            $table->string('position');

            $table->integer('shipping_company_id')->unsigned();
            $table->foreign('shipping_company_id')->references('id')->on('shipping_companies');

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
        Schema::dropIfExists('shipping_company_agents');
    }
}
