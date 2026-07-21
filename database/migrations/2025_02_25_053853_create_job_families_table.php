<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateJobFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('job_families', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Insert predefined job families
        DB::table('job_families')->insert([
            ['id' => 1, 'name' => 'Consumer Welfare Development', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Business Development', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Industry Development', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'People and Organization Development', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Resources', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Exports and Investments Development', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('job_families');
    }
}
