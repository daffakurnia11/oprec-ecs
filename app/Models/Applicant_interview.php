<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_interview extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'number',
        'date_schedule',
        'time_schedule',
        'attend'
    ];

    public function getRouteKeyName()
    {
        return 'number';
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
