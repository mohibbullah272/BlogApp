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
        if (Schema::hasTable('blog') && ! Schema::hasTable('blogs')) {
            Schema::rename('blog', 'blogs');
        }

        if (! Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table): void {
                $table->id();
                $table->string('title');
                $table->text('content');
                $table->string('image')->nullable();
                $table->string('slug')->nullable();
                $table->string('status')->nullable();
                $table->string('category')->nullable();
                $table->string('tags')->nullable();
                $table->string('author')->nullable();
                $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
                $table->timestamps();
            });
        }

        if (! Schema::hasColumn('blogs', 'title')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->string('title')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'content')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->text('content')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'image')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->string('image')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'slug')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->string('slug')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'status')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->string('status')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'category')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->string('category')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'tags')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->string('tags')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'author')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->string('author')->nullable();
            });
        }

        if (! Schema::hasColumn('blogs', 'user_id')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            });
        }

        if (! Schema::hasColumn('blogs', 'created_at') || ! Schema::hasColumn('blogs', 'updated_at')) {
            Schema::table('blogs', function (Blueprint $table): void {
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Intentionally left empty: this is a forward-fix migration.
    }
};
