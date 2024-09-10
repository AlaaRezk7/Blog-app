<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
           $table->string('thumbnail')->nullable();
           $table->string('title');
           $table->string('color');
           $table->string('slug')->unique();
           $table->foreignId('category_id');
           $table->text('content')->nullable();
           $table->text('tags')->nullable();
           $table->boolean('published')->default();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
            $table->dropColumn('title');
            $table->dropColumn('color');
            $table->dropColumn('slug');
            $table->dropColumn('category_id');
            $table->dropColumn('content');
            $table->dropColumn('tags');
            $table->dropColumn('published');
        });
    }
};
