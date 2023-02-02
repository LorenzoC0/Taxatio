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
        Schema::create('valutations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->references('id')->on('professors');
            $table->foreignId('valutation_request_id')->references('id')->on('valutation_requests');
            $table->integer('grade');
            $table->string('comment');
            $table->enum('status', ['read', 'unread'])->default('unread');
            $table->string('student_id_hash', 32);
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
        Schema::dropIfExists('valutations');
    }
};
