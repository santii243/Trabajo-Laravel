<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskDoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_done', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->integer('student_id', 11);
            $table->integer('task_id', 11);
            $table->integer('mark', 11);
            $table->tinyint('deleted', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_done');
    }
}
