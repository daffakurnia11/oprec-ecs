<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name', 'slug', 'desc', 'contact', 'open_regis', 'close_regis'
    ];

    public function course_member()
    {
        return $this->belongsTo(Course_member::class);
    }
}
