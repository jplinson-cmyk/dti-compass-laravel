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
        Schema::create('competency_sets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('functional_group_id');
            $table->unsignedBigInteger('bureau_office_id');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('competency_id');
            $table->unsignedInteger('standard'); 
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
        Schema::dropIfExists('competency_sets');
    }
};
