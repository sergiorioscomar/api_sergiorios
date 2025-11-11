<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn('posts', 'title')) {
                $table->dropColumn('title');
            }
            if (Schema::hasColumn('posts', 'body')) {
                $table->dropColumn('body');
            }
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->text('body')->nullable();
        });
    }
};
