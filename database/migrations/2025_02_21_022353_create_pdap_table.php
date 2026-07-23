<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdap', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competency_assessment_id'); // Foreign key reference
            $table->unsignedBigInteger('job_family_competency_id')->nullable(); // Foreign key reference
            $table->unsignedBigInteger('job_family_id')->nullable(); // Foreign key reference
            $table->text('action_plan')->nullable();
            $table->date('timeline')->nullable();
            $table->string('priority_a')->nullable();
            $table->string('priority_b')->nullable();
            $table->string('priority_c')->nullable();
            $table->string('priority_d')->nullable();
            $table->text('skills_to_acquire')->nullable();
            $table->text('supervisor_notes')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('competency_assessment_id')->references('id')->on('competency_assessments')->onDelete('cascade');
            $table->foreign('job_family_competency_id')->references('id')->on('job_family_competencies')->onDelete('set null');
            $table->foreign('job_family_id')->references('id')->on('job_families')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pdap');
    }
};
