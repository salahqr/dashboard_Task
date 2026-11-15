<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecturers extends Model
{
    protected $fillable = ['image', 'emp_num', 'user_id', 'departemnt', 'office_rome', 'isActivated'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }
}
        