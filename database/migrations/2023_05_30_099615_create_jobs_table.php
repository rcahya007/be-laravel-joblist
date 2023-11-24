<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_company');
            $table->foreign('id_company')->references('id')->on('companies');
            $table->unsignedBigInteger('id_job_category');
            $table->foreign('id_job_category')->references('id')->on('job_categories');
            $table->unsignedBigInteger('id_job_qualifications');
            $table->foreign('id_job_qualifications')->references('id')->on('job_qualifications');
            $table->string('job_title');
            $table->string('job_place');
            $table->integer('job_salary');
            $table->boolean('job_promotion');
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
        Schema::dropIfExists('jobs');
    }
}
