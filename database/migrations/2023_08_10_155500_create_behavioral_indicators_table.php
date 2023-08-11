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
        Schema::create('behavioral_indicators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competency_id'); 
            $table->foreign('competency_id')
                ->references('id')
                ->on('competencies')
                ->onDelete('cascade');
            $table->text('description');
            $table->string('level', 50);
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
        Schema::dropIfExists('behavioral_indicators');
    }
};
