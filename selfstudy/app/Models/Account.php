<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Ha majd auth is kell
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * A tábla neve, amit ez a modell képvisel.
     *
     * Mivel a táblád továbbra is 'users', ezt itt át kell írni:
     */
    protected $table = 'users';

    /**
     * A tömeges kitöltésnél engedélyezett mezők.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level_id',
        'study_set_id',
        'attempt_id',
        'username',
        'email',
        'password',
        'phone',
        'realname',
        'profile_picture',
        'age',
        'role',
    ];

    /**
     * Olyan mezők, amelyeket rejtünk JSON‐exportnál.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Automatikusan konvertálandó mezők típusa.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'age' => 'integer',
    ];

    /**
     * Kapcsolat: az Account tartozik egy Level-hez.
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    /**
     * Kapcsolat: az Account tartozik egy StudySet-hez.
     */
    public function studySet()
    {
        return $this->belongsTo(StudySet::class);
    }

    /**
     * Kapcsolat: az Account tartozik egy Attempt-hez.
     */
    public function attempt()
    {
        return $this->belongsTo(Attempt::class);
    }
}
