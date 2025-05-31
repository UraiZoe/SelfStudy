<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('word_pair_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('path');
            $table->string('filename');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['word_pair_id']);
        });
        Schema::dropIfExists('Image');
    }
};
