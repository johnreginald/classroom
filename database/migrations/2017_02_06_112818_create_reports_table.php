<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fee')->unsigned();
            $table->string('status');

            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references("id")->on('students')
                    ->onDelete("cascade");
            
            $table->integer("batch_id")->unsigned();
            $table->foreign('batch_id')->references("id")->on('batches')
                    ->onDelete("cascade");

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
        Schema::dropIfExists('reports');
    }
}
