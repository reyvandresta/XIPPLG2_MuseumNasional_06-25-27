<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualToursTable extends Migration
{
    public function up()
    {
        Schema::create('virtual_tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('picture');
            $table->text('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('virtual_tours');
    }
}
