<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTable extends Controller
{
    public function craeteTable(){
        Schema::create('products',function(Blueprint $table)
        {
            $table->increment('id');
            $table->string('name');
            $table->integer('price');
            $table->boolean('active');
            $table->timestamps('id');

        });
        echo("tạo thành công");
        Schema::create('categories',function(Blueprint $table)
        {
            $table->increment('id');
            $table->string('name')->unique();
            $table->string('alias');
            $table->integer('order');
            $table->integer('prarent_id');
            $table->string('keyworks');
            $table->string('discription');
            $table->timestamps('id');

        });
    }
}
