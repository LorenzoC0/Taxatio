<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('cf')->unique();
            $table->foreign('cf')->references('cf')->on('users');
            $table->string('name', 64)->nullable();
            $table->string('surname', 64)->nullable();
            $table->boolean('valutation_done')->nullable();
            $table->foreignId('course_id')->nullable()->constrained()->references('id')->on('courses');
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
};
