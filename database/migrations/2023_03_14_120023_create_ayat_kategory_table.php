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
        Schema::create('ayat_kategory', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('ayat_id')->constrained('ayats')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('kategory_id')->constrained('kategories')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayat_kategory');
    }
};
