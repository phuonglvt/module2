<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullName');
            $table->string('dayRegistration');
            $table->string('CMND');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('installationAddress');
            $table->string('note');
//            $table->string('services_id');
//            $table->foreign('services_id')->references('id')->on('services');
            $table->integer('services_id')->unsigned()->nullable();
//            $table->foreign('services_id')->references('id')->on('services');
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
        Schema::dropIfExists('customers');
    }
}
