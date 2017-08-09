<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_products', function (Blueprint $table) {
            $table->increments('id_trans_product');
            $table->integer('id_trans')->unsigned();
            $table->string('id_product');
            $table->integer('jumlah');
            $table->timestamps();
            $table->foreign('id_trans')
                  ->references('id_transaction')
                  ->on('transactions')
                  ->onDelete('CASCADE');
            $table->foreign('id_product')
                  ->references('id_product')
                  ->on('products')
                  ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_products');
    }
}
