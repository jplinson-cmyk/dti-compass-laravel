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
        Schema::table('cdp_properties', function (Blueprint $table) {
            $table->string('key')->nullable()->change();
            $table->text('value')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cdp_properties', function (Blueprint $table) {
            // Assuming 'key' and 'value' were not nullable before
            $table->string('key')->nullable(false)->change();
            $table->text('value')->nullable(false)->change();
        });
    }
};
