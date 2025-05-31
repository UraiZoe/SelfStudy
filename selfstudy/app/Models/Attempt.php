<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attempt extends Model
{
    use HasFactory;

    /**
     * A tömeges kitöltésnél engedélyezett mezők.
     *
     * @var array<int,string>
     */
    protected $fillable = [
        'wrong_answers',
        'correct_answers',
    ];

    /**
     * (Opcionális) Ha szeretnéd lekérni, hogy melyik felhasználókhoz tartozik ez az attempt:
     *
     * public function users()
     * {
     *     return $this->hasMany(User::class);
     * }
     */
}
