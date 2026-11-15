<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Courses extends Model
{

    public function lecturers(): BelongsTo
    {
        return $this->belongsTo(Lecturers::class);
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }

    public function courses()
    {
        return $this->hasMany(courses_user::class);
    }
}
