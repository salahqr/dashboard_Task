<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    public function courses(): BelongsTo
    {
        return $this->belongsTo(Courses::class);
    }
}
