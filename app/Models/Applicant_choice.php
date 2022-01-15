<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_choice extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id', 'first_choice', 'first_reason', 'second_choice', 'second_reason'
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
