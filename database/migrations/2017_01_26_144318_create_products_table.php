<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('description');
            $table->string('name');
            $table->float('price');
            $table->float('shippingcost');
            $table->integer('totalrating');
            $table->string('thumbnail');
            $table->string('image');
            $table->float('discountpercentage');
            $table->integer('votes');
            
            $table->integer('idcategory')->unsigned();
            $table->foreign('idcategory')->references('id')->on('categories');
            
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
        Schema::dropIfExists('products');
    }
}
