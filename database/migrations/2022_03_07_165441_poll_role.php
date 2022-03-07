<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PollRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('roles')->index();
            $table->foreignId('poll_id')->references('id')->on('polls');
            $table->timestamps();
            $table->unique(['role_id', 'poll_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_role');
    }
}
