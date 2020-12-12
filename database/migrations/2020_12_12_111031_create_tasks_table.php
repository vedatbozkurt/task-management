<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-12 14:12:37
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-12 15:25:58
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("body");
            $table->string("status");
            $table->integer('taskable_id');
            $table->string("taskable_type");
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
        Schema::dropIfExists('tasks');
    }
}
