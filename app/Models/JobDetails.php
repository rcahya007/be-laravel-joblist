<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_job',
        'intro_job_desc',
        'job_desc',
        'job_weekday',
        'job_time',
        'job_requirements',
        'job_type_condition',
        'job_criteria',
        'job_level',
        'job_experience',
        'job_spesialis',
    ];
    protected $casts = [
        'id' => 'integer',
        'id_job' => 'integer',
        'job_desc' => 'array',
        'job_criteria' => 'array',
        'job_requirements' => 'array',
    ];
}
