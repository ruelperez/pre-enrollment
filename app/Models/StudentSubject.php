<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    protected $fillable = [
        'user_id',
        'subject_id',
        'course_id',
        'yearlevel_id',
        'semester_id',
    ];

    use HasFactory;
}
