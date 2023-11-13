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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            // $table->interger('department_id');
            $table->string('name')->unique();
            $table->string('status')->default('active');
            $table->string('phone')->unique();
            $table->string('department')->nullable();
            $table->string('email')->unique();
            $table->text('image')->nullable();
            $table->string('shift')->nullable();
            $table->string('dob');
            $table->string('gender');
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
        Schema::dropIfExists('employees');
    }
};
