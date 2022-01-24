<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'number', 'email', 'line_id', 'whatsapp'
    ];

    public function applicant_choice()
    {
        return $this->hasOne(Applicant_choice::class);
    }

    public function applicant_file()
    {
        return $this->hasOne(Applicant_file::class);
    }

    public function applicant_interview()
    {
        return $this->hasOne(Applicant_interview::class);
    }
}
