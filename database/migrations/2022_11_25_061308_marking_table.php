<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MarkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('specialty_id');
            $table->date('date');

            $table->timestamps();

            $table->foreign('doctor_id')->on('users')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('specialty_id')->on('specialties')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
