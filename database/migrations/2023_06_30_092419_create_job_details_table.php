<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_job');
            $table->foreign('id_job')->references('id')->on('jobs')->onDelete('cascade');;
            $table->text('intro_job_desc')->nullable();
            $table->json('job_desc');
            $table->string('job_weekday');
            $table->string('job_time');
            $table->json('job_requirements');
            $table->string('job_type_condition');
            $table->json('job_criteria');
            $table->string('job_level');
            $table->string('job_experience');
            $table->string('job_spesialis');
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
        Schema::dropIfExists('job_details');
    }
}
