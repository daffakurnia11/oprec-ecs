<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'course_id', 'classes', 'krsm', 'course_group_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->hasOne(Course::class);
    }

    public function course_group()
    {
        return $this->belongsTo(Course_group::class);
    }
}
