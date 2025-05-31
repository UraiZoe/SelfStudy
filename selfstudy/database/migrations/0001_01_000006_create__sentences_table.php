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
        Schema::create('sentences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wrong_answer_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('hungarian_sentence')->nullable();
            $table->string('english_sentence')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sentences', function (Blueprint $table) {
            $table->dropForeign(['wrong_answer_id']);
        });
        Schema::dropIfExists('Sentences');
    }
};
