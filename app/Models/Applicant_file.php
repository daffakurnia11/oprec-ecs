<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_file extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id', 'essay', 'cv', 'mbti', 'motlet', 'commitment'
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
