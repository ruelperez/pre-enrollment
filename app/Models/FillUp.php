<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FillUp extends Model
{

    protected $fillable = [
        'user_id',
        'course_id',
        'student_class',
        'yearlevel_id',
        'semester_id',
        'student_number',
        'school_year_start',
        'school_year_end',
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'guardian',
        'contact_number',
        'birthdate',
        'birthplace',
        'sex',
    ];

    use HasFactory;
}
