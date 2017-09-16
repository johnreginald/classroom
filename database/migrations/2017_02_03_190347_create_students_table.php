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
            $table->string('name');
            $table->string('gender', 1);
            $table->string('nrc', 255);
            $table->text('address');
            $table->string('phone');
            $table->timestamp('dob');
            $table->string('remark')->nullable();
            $table->string('status')->nullable();
            
            $table->integer("batch_id")->unsigned()->default(1);
                    
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
