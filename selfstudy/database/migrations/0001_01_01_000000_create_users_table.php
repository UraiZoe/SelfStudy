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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Alapadatok
            $table->string('user_name',25);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // Kiegészítő mezők
            $table->string('real_name',100)->nullable();
            $table->foreignId('levelId');//LevelId
            $table->date('birth_date'); // születési dátum
            $table->enum('role', ['admin','teacher','student'])->default('student'); // felhasználói szerepkör
            $table->string('profil_picture');//Profilkép
            $table->string('phone', 15)->nullable(); // telefonszám, max. 15 számjegy
            $table->boolean('black_mode')->default(true);

            $table->rememberToken();
            $table->timestamps();
        });

        // Laravel-alapértelmezett néven: használhatod a password_resets-t is
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // (Ha adatbázis-alapú session-t, cache-t, queue-t használsz, ne felejtsd el legenerálni és lefuttatni a megfelelő migrációkat:
        // php artisan session:table
        // php artisan cache:table
        // php artisan queue:table
        // php artisan migrate)
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('users');
    }
};
