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
        Schema::create('development_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cdp_id'); 
            $table->unsignedBigInteger('competency_id'); 
            $table->unsignedBigInteger('employee_id'); 
            $table->unsignedBigInteger('supervisor_id')->nullable(); 
            $table->string('percent_criteria')->nullable();
            $table->string('term')->nullable();
            $table->text('action')->nullable();
            $table->date('target_date')->nullable();
            $table->string('status')->nullable();
            $table->text('supervisor_notes')->nullable();
            $table->timestamps();

            $table->foreign('cdp_id')->references('id')->on('career_development_plans')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('supervisor_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('development_activities');
    }
};
