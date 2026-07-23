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
        Schema::create('cdp_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cdp_id'); 
            $table->string('key');
            $table->text('value');
            $table->timestamps();
            $table->foreign('cdp_id')->references('id')->on('career_development_plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cdp_properties');
    }
};
