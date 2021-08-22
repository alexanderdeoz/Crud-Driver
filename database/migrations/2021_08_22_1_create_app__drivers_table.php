<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.drivers', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('vehicule_id')->constrained('app.vehicules');
            $table->string('name')->comment('Nombre del conductor');
            $table->date('birthdate');
            $table->date('joined_date');
            $table->string('email')->unique();
            $table->double('phone')->comment('Telefono del conductor');
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('app.drivers');
    }
}
