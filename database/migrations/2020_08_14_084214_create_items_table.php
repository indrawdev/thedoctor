<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id');
            $table->foreignId('unit_id');
            $table->foreignId('distributor_id');
            $table->string('name');
            $table->decimal('price', 9);
            $table->integer('stock');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('clinic_id')->references('id')->on('clinics');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('distributor_id')->references('id')->on('distributors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
