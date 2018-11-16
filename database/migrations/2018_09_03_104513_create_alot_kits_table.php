<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlotKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alot_kits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('kit_id');
            $table->date('issueDate');
            $table->date('ReturnDate');
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
        Schema::dropIfExists('alot_kits');
    }
}
