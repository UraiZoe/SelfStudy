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
        Schema::create('word_pairs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wrong_answer_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('sentence_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('hungarian_word')->nullable();
            $table->string('english_word')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('word_pairs', function (Blueprint $table) {
            $table->dropForeign(['wrong_answer_id']);
            $table->dropForeign(['sentence_id']);
        });
        Schema::dropIfExists('wordPairs');
    }
};
