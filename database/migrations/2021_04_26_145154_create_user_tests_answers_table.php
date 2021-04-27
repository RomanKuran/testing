<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTestsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tests_answers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->references('id')->on('users');
            $table->string('tests_group_id')->references('id')->on('tests_groups');
            $table->text("answers")->nullable();
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
        Schema::dropIfExists('user_tests_answers');
    }
}
