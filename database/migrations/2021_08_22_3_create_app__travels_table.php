<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.travels', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('driver_id')->constrained('app.drivers');              
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->softDeletes();
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('app.travels');
    }
}
