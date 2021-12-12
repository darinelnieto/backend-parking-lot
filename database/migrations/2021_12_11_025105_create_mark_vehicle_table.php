<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_vehicle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mark_id')->constrained('marks')
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
        Schema::dropIfExists('mark_vehicle');
    }
}
