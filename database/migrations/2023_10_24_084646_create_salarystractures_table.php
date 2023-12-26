<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarystractures', function (Blueprint $table) {
            $table->id();
            $table->string('DesignationType');
            $table->string('Title');
            $table->string('Basic');
            $table->string('HouseAllownce');
            $table->string('MedicalAllowance');
            $table->string('TransportAllowance');
            $table->string('Total');
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
        Schema::dropIfExists('salarystractures');
    }
};
