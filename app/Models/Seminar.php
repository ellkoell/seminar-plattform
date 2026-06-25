<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    // Diese Felder dürfen über Formulare gespeichert werden
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'date',
        'time',
        'location',
        'max_participants',
    ];

    // Ein Seminar gehört zu einem User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'registrations');
    }
}
