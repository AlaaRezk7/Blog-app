<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categoryyys', function (Blueprint $table) {
            $table->string('name')->nullable(); // Add the first new column
            $table->integer('slug')->unique(); // Add the second new column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categoryyys', function (Blueprint $table) {
            $table->dropColumn('name'); // Drop the first new column
            $table->dropColumn('slug'); // Drop the second new column
        });
    }
}
