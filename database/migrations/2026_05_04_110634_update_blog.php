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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('title');
            $table->foreignId("user_id")->constrained("users");
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('author')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
};
