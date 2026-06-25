<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = ['user_id', 'seminar_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function seminar()
    {
        return $this->belongsTo(Seminar::class);
    }
}
