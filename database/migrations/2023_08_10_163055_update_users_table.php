<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // Remove the 'name' column
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
        });

        // Add 'firstname' and 'lastname' columns
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->after('id');
            $table->string('lastname')->after('firstname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        // Reverse the changes: Add 'name' column and remove 'firstname' and 'lastname' columns
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
        });
    }
}
