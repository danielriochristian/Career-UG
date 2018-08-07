<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vacancy', function (Blueprint $table) {
          $table->increments('id');
          $table->string('logo');
          $table->string('company_title');
          $table->string('job_title');
          $table->string('job_description');
          $table->string('company_overview');
          $table->string('location');
          $table->string('company_info');
          $table->timestamps();
          $table->smallInteger('status');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancy');
    }
}
