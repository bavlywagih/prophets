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
        Schema::create('prophets', function (Blueprint $table) {
            $table->id();
            $table->string('name_arabic');
            $table->longText('meaning_name_arabic');
            $table->longText('story_arabic');
            $table->string('name_english');
            $table->longText('meaning_name_english');
            $table->longText('story_english');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prophets');
    }
};
