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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->integer('employee_id_number');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('employment_status', 50);
            $table->string('functional_group', 100);
            $table->string('bureau_office', 100);
            $table->string('division', 100);
            $table->string('imediate_supervisor', 100);
            $table->string('position', 100);
            $table->string('job_level', 100);
            $table->date('last_review_at');
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
        Schema::dropIfExists('employees');
    }
};
