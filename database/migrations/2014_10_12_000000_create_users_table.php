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
        Schema::create('JobTitle', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->char('name',200);
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->char('name',100);
            $table->char('middle_name',100)->nullable();
            $table->char('last_name',100)->nullable();
            $table->enum('gender',[ 'M','F' ])->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('job_title_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('job_title_id')
                ->references('id')
                ->on('JobTitles')
                ->onCascade('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('JobTitles');
        Schema::dropIfExists('users');
    }
};
