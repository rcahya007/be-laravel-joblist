<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_about',
        'company_no',
        'company_size',
        'company_time_acc',
        'company_category',
        'company_additional',
        'company_place',
    ];

    protected $casts = [
        'id' => 'integer',
        'company_time_acc' => 'integer',

    ];
}
