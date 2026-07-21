<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToEmployeesTable extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->enum('disability', ['Yes', 'No'])->nullable()->after('gender');

            $table->enum('indigenous', ['Yes', 'No'])->nullable()->after('disability');

            $table->string('ip_group')->nullable()->after('indigenous');

            $table->enum('civil_status', ['Single', 'Married', 'Widowed', 'Legally Separated'])->nullable()->after('ip_group');

            $table->string('religion')->nullable()->after('civil_status');
        });
    }

    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('disability');
            $table->dropColumn('indigenous');
            $table->dropColumn('ip_group');
            $table->dropColumn('civil_status');
            $table->dropColumn('religion');
        });
    }
}


