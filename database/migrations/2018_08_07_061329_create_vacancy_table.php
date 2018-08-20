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
          $table->string('nama');
          $table->string('desk');
          $table->string('info');
          $table->string('persyaratan');
          $table->string('alamat');
          $table->string('kategori');
          $table->string('prov');
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
