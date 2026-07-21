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
        Schema::table('employees', function (Blueprint $table) {
            // Add the middlename column before lastname
            $table->string('middlename', 50)->nullable()->after('firstname');
    
            // Add the suffix column after lastname
            $table->string('suffix', 10)->nullable()->after('lastname');
        });
    }
    
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['middlename', 'suffix']);
        });
    }
    
};
