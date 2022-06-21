<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('products', function (Blueprint $table) {
            $table->increaments('id');
            $table->string('name')->unique();
            $table->string('alias');
            $table->integer('price');
            $table->integer('pricesale');
            $table->text('intro');
            $table->longText('content');
            $table->string('image');
            $table->string('keywork');
            $table->string('discription');
            $table->integer('user_id')->unisigned();
            $table->integer('user_id')->references('id')->on('users')->onDelate('cascade');
            $table->integer('cata_id')->unisigned();
            $table->integer('cate_id')->references('id')->on('categories')->onDelate('cascade');
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
};
