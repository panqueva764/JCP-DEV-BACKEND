<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJsonDataToApiResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // No es necesario agregar la columna 'response_data' nuevamente
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // No es necesario modificar la migración 'down'
    }
}
