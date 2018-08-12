<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('company_name');
            $table->string('group_of_companies');
            $table->string('principal');
            $table->string('phone_number_of_principal');
            $table->text('function_of_company');
            $table->string('name_prepaper');
            $table->string('position_prepaper');
            $table->string('title_prepaper');
            $table->string('education_background_prepaper');
            $table->string('phone_number_of_prepaper');

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
