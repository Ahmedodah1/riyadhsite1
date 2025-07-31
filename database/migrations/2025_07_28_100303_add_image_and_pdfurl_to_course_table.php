<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /**
     * Reverse the migrations.
     */
    public function up(): void
    {
        Schema::table('course', function (Blueprint $table) {
            $table->string('pdf_url')->nullable()->after('cover_url');
            $table->string('image')->nullable()->after('pdf_url');
        });

    }
};
