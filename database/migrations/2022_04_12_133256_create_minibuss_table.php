<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinibussTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minibuss', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('no_polisi');
            $table->string('driver');
            $table->string('wisata');
            $table->string('ketersediaan');
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
        Schema::dropIfExists('minibuss');
    }
}
