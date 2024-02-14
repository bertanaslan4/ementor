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
        Schema::create('info_docs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('docs');
            $table->unsignedBigInteger('info_blogs_id')->nullable();
            $table->foreign('info_blogs_id')->references('id')->on('info_blogs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_docs');
    }
};
