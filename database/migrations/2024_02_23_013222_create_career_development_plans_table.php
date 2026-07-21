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
        Schema::create('career_development_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id'); 
            $table->unsignedBigInteger('competency_assessment_id');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('competency_assessment_id')->references('id')->on('competency_assessments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_development_plans');
    }
};
