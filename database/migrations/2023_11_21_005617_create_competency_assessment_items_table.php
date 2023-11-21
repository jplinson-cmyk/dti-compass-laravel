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
        Schema::create('competency_assessment_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('competency_assessment_id');
            $table->unsignedBigInteger('behavioral_indicator_id');
            $table->integer('score')->nullable();
            $table->string('assessment_type', 50);
            $table->timestamps();


            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('competency_assessment_id')->references('id')->on('competency_assessments');
            $table->foreign('behavioral_indicator_id')->references('id')->on('behavioral_indicators');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competency_assessment_items');
    }
};
