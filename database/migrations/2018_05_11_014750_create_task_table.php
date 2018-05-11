<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('Tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('created-by');
            $table->integer('project-id')->unsigned();
            $table->integer('user-id')->unsigned();
            $table->string('description');
            $table->softDeletes('delete_at');
            $table->timestamps();
        });

        Schema::table('tasks', function (Blueprint $table){
            $table->foreign('project-id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('user-id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tasks');
    }
}