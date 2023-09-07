<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email')->unique();
            $table->unsignedBigInteger('employee_id');
            $table->enum('gender', ['male', 'female']);

            $table->unsignedBigInteger('employment_status_id');
            $table->unsignedBigInteger('functional_group_id');
            $table->unsignedBigInteger('bureau_office_id');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('job_level_id');

            
            $table->foreign('employment_status_id')->references('id')->on('employment_status');
            $table->foreign('functional_group_id')->references('id')->on('functional_groups');
            $table->foreign('bureau_office_id')->references('id')->on('bureaus_offices');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('job_level_id')->references('id')->on('job_levels');

            $table->string('immediate_supervisor', 100);

            $table->date('last_review_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
