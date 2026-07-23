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
        Schema::table('pdap', function (Blueprint $table) {
            $table->text('experience_action')->nullable();
            $table->text('experience_measures')->nullable();
            $table->string('experience_by_whom')->nullable();
            $table->string('experience_status')->nullable();
            $table->text('experience_supervisor_notes')->nullable();

            $table->text('exposure_action')->nullable();
            $table->text('exposure_measures')->nullable();
            $table->string('exposure_by_whom')->nullable();
            $table->string('exposure_status')->nullable();
            $table->text('exposure_supervisor_notes')->nullable();

            $table->text('education_action')->nullable();
            $table->text('education_measures')->nullable();
            $table->string('education_by_whom')->nullable();
            $table->string('education_status')->nullable();
            $table->text('education_supervisor_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pdap', function (Blueprint $table) {
            $table->dropColumn([
                'experience_action',
                'experience_measures',
                'experience_by_whom',
                'experience_status',
                'experience_supervisor_notes',
                'exposure_action',
                'exposure_measures',
                'exposure_by_whom',
                'exposure_status',
                'exposure_supervisor_notes',
                'education_action',
                'education_measures',
                'education_by_whom',
                'education_status',
                'education_supervisor_notes'
            ]);
        });
    }
};
