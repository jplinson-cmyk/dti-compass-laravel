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
        Schema::create('competency_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('session_type', 50);
            $table->unsignedBigInteger('assessor_id')->nullable();
            $table->string('status', 50);
            $table->string('current_page')->nullable();
            $table->timestamp('date_started')->nullable();
            $table->timestamp('date_completed')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('assessor_id')->references('id')->on('employees')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competency_assessments');
    }
};
