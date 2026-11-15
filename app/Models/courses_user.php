<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses_user extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Courses::class);
    }
}
