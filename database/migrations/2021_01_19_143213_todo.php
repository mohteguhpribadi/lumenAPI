<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Todo extends Migration
{
    public function up()
    {
        Schema::create('tempatwisata', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nama");
            $table->string("url_img");
            $table->string("alamat");
            $table->text("deskripsi");
        });
    }

    public function down()
    {
        Schema::dropIfExists('tempatwisata');
    }
}