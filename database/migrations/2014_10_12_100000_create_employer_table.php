<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('employer', function (Blueprint $table) {
          $table->increments('id');
          $table->string('org_name')->unique();
          $table->string('postcode');
          $table->string('org_type');
          $table->string('country');
          $table->string('bus_field');
          $table->string('bus_size');
          $table->string('address');
          $table->string('city');
          $table->string('province');
          $table->string('phone');
          $table->string('fax');
          $table->string('website');
          $table->string('descript');
          $table->string('logo');
          $table->rememberToken();
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
        Schema::dropIfExists('employer');
    }
}
