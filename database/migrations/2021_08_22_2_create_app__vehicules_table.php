<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.vehicules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('app.drivers');
            $table->string('color')->comment('Color del vehiculo');
            $table->string('model')->comment('Modelo del vehiculo');
            $table->string('plate_car');
            $table->string('type')->comment('tipo de vehiculo');
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('app.vehicules');
    }
}
