<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id');
            $table->foreignId('registration_id');
            $table->foreignId('patient_id');
            $table->foreignId('fee_id');
            $table->string('anamnesa');
            $table->string('diagnosis');
            $table->string('action');
            $table->decimal('total');
            $table->boolean('confirmed');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('registration_id')->references('id')->on('registrations');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('fee_id')->references('id')->on('fees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
