<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobQualification extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_qualification',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
