<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_vehicle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('owners')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('vehicle_id')->constrained('vehicles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('owner_vehicle');
    }
}
