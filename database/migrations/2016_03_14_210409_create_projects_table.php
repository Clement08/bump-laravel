<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('customer_infos');
            $table->string('customer_adress');
            $table->string('customer_email');
            $table->string('customer_numberphone');
            $table->string('contact_infos');
            $table->string('contact_adress');
            $table->string('contact_email');
            $table->string('contact_numberphone');
            $table->text('identity_sheet');
            $table->string('project_type');
            $table->text('context');
            $table->text('request');
            $table->text('goals');
            $table->text('constraints');
            $table->integer('user_id')->unsigned();
            $table->string('status')->default(0);
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
        Schema::drop('projects');
    }
}