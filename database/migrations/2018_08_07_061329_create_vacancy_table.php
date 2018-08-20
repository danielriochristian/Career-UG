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
          $table->string('comp_ttl');
          $table->string('job_ttl');
          $table->string('job_des');
          $table->string('comp_ovr');
          $table->string('loc');
          $table->string('comp_inf');
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
