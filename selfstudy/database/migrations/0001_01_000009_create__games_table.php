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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attempt_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('word_pair_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('sentence_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('image_id')
                ->constrained()
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('games', function (Blueprint $table) {
            $table->dropForeign(['attempt_id']);
            $table->dropForeign(['word_pair_id']);
            $table->dropForeign(['sentence_id']);
            $table->dropForeign(['image_id']);
        });
        Schema::dropIfExists('Games');
    }
};
