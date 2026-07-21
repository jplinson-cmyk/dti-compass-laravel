<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('development_activities', function (Blueprint $table) {
            // Change target_date column from date to nullable text
            $table->text('target_date')->nullable()->change();
            
            // Assuming 'target_date' is right before 'status', add 'by_whom' after 'target_date'
            $table->text('by_whom')->nullable()->after('target_date');
        });
    }

    public function down()
    {
        Schema::table('development_activities', function (Blueprint $table) {
            // Revert target_date back to date type
            // Note: Be cautious about existing text data that cannot be directly converted back to date
            $table->date('target_date')->nullable()->change();
            
            // Remove the by_whom column
            $table->dropColumn('by_whom');
        });
    }
};
