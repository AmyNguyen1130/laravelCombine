<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product',function(Blueprint $table){
            $table->Increments('id');
            $table->timestamps();
            $table->String('name',400);
            $table->Integer('id_type');
            $table->String('description',100);
            $table->float('promotion_price',100);
            $table->float('unit_price');
            $table->String('image',200);
            $table->String('unit',200);
            $table->Integer('new');
        });
        echo "create table products successful";
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
