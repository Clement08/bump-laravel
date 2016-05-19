<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnhanceAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table){
            $table->increments('id');
            $table->string('annonce_name');
            $table->string('annonce_infos');
            $table->string('annonce_email');
            $table->integer('annonce_numberphone');
            $table->integer('annonce_prix');
            $table->string('annonce_image_filepath');
            $table->string('annonce_type');
            $table->string('annonce_pointure');
            $table->integer('user_id', false, true);
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
