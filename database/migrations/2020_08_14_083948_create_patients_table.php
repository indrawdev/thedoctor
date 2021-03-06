<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id');
            $table->foreignId('insurance_id');
            $table->string('number');
            $table->string('name');
            $table->date('dob');
            $table->enum('gender', ['PRIA', 'WANITA']);
            $table->enum('blood', ['O', 'A', 'B', 'AB']);
            $table->integer('height');
            $table->integer('weight');
            $table->text('address');
            $table->string('phone');
            $table->string('insurance_number');
            $table->boolean('is_active');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('clinic_id')->references('id')->on('clinics');
            $table->foreign('insurance_id')->references('id')->on('insurances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
