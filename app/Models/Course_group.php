<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_group extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id', 'user_id', 'num_group'
    ];

    public function course_member()
    {
        return $this->hasMany(Course_member::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
