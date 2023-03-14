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
        Schema::create('kategories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            if (env('DB_DATABASE') == 'pgsql') {
                $table->string('name')->fulltext();
            } else {
                $table->fullText('name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategories');
    }
};
