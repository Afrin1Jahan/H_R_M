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
            $table->string('name',100)->unique();
            $table->string('status',12)->default('active');
            $table->string('phone',15)->unique();
            $table->string('email',100)->unique();
            $table->text('image')->nullable();
            $table->string('shift',10)->nullable();
            $table->string('dob',15);
            $table->string('gender',6);
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
