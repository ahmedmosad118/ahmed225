<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('shipped')->default(false);
          $table->datetime('shipped_at');
          $table->double('shipping_fees');
          $table->string('note');

          $table->integer('client_id')->unsigned();
          $table->foreign('client_id')->references('id')->on('clients');

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
        Schema::dropIfExists('orders');
    }
}
