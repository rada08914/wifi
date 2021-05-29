<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->binary('photos');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->bigInteger('contact');
            $table->string('address');
            $table->string('email');
            $table->date('birthday');
            $table->enum('gender',['Male','Female']);
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
        Schema::dropIfExists('user');
    }
}
