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
        Schema::create('surahs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("number");
            $table->string("name_arab");
            $table->string("name_latin");
            $table->string("place");
            $table->string("translate");
            $table->integer("ayat_count");
            $table->text("description")->fulltext();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surahs');
    }
};
