<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_company',
        'id_job_category',
        'id_job_qualifications',
        'job_title',
        'job_place',
        'job_salary',
        'job_promotion',
    ];

    protected $casts = [
        'id' => 'integer',
        'id_company' => 'integer',
        'id_job_category' => 'integer',
        'id_job_qualifications ' => 'integer',
        'job_salary' => 'integer',
        'job_promotion' => 'integer'
    ];
}
