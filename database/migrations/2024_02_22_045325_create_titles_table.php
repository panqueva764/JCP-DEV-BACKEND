<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institution');
            $table->unsignedSmallInteger('year');
            $table->string('pdf_url');
            $table->timestamps();
            $table->boolean('enabled');
        });
    }

    public function down()
    {
        Schema::dropIfExists('titles');
    }
}
