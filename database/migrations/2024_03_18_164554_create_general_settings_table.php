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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_logo');
            $table->string('banner_title');
            $table->string('banner_subtitle');
            $table->string('section_title');
            $table->string('section_subtitle');
            $table->string('section1_title');
            $table->string('section1_subtitle');
            $table->string('section2_title');
            $table->string('section2_subtitle');
            $table->string('section3_title');
            $table->string('section3_subtitle');
            $table->string('section4_title');
            $table->string('section4_subtitle');
            $table->string('section5_title');
            $table->string('section5_subtitle');
            $table->string('section6_title');
            $table->string('section6_subtitle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
