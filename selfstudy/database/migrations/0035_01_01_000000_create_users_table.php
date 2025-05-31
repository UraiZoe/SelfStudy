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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')
                ->nullable()
                ->constrained()     // → ez automatikusan a `levels.id`-re mutat
                ->onDelete('set null');

            // Ha a study_sets és attempts táblák nevei is 'study_sets', 'attempts'
            $table->foreignId('study_set_id')
                ->nullable()
                ->constrained()     // → `study_sets.id`
                ->onDelete('set null');

            $table->foreignId('attempt_id')
                ->nullable()
                ->constrained()     // → `attempts.id`
                ->onDelete('set null');

            $table->string('username', 100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone', 15)->nullable();
            $table->string('realname', 100)->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('age')->nullable();
            $table->enum('role', ['student', 'teacher', 'moderator', 'admin'])
                ->default('student');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Először el kell távolítani az idegen kulcs-constrainteket, mielőtt törölnénk a táblát.
            $table->dropForeign(['level_id']);
            $table->dropForeign(['study_set_id']);
            $table->dropForeign(['attempt_id']);
        });
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
