<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'subject_code',
        'unit',
        'day',
        'time',
        'room',
        'modality',
        'teacher',
        'tuition',
        'course_id',
        'yearlevel_id',
        'semester_id',
    ];

    use HasFactory;
}
