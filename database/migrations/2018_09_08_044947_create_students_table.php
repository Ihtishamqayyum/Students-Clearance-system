<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->string('fatherName');
            $table->integer('rollNo');
            $table->integer('depId');
            $table->integer('batchId');
            $table->integer('programId');
            $table->string('desciplineId');

            $table->string('dob');
            $table->string('contactNo');
            $table->string('gender');

            $table->text('address');
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
        Schema::dropIfExists('students');
    }
}
