<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('annonce_name');
            $table->string('annonce_infos');
            $table->string('annonce_email');
            $table->number('annonce_numberphone');
            $table->number('annonce_prix');
            $table->file('annonce_image');
            $table->string('annonce_type');
            $table->string('annonce_pointure');
            $table->integer('user_id')->unsigned();
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
        Schema::drop('annonces');
    }
}