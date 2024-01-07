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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('leavetype_id')->constrained('leavetypes');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('no_of_days')->default(1);
            $table->string('emergency_contact');
            $table->text('reason_for_leave')->nullable();
            $table->string('status')->default('pending');
            $table->string('action')->nullable();

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
        Schema::dropIfExists('leaves');
    }
};
