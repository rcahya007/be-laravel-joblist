<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_category',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
