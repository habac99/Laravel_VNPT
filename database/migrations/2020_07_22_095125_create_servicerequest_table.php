<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicerequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_request', function (Blueprint $table) {
            $table->id();
            $table->text('c_name');
            $table->text('c_email');
            $table->text('c_phone');
            $table->text('c_company');
            $table->text('c_address');
            $table->text('service_name');

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
        Schema::dropIfExists('service_request');
    }
}
