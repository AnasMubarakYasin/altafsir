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
        Schema::create('ayats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("number");
            $table->text("text_id")->fulltext();
            $table->text("text_arab")->fulltext();
            $table->text("text_latin")->fulltext();
            $table->json("audios")->default("[]");

            $table->foreignId('surah_id')->constrained('surahs')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayats');
    }
};
