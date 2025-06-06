<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'age' => 'integer',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function studySet()
    {
        return $this->belongsTo(StudySet::class);
    }

    public function attempt()
    {
        return $this->belongsTo(Attempt::class);
    }
}
