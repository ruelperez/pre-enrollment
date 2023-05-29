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
        'fullname',
        'age',
        'status',
        'height',
        'weight',
        'citizen',
        'father',
        'father_occupation',
        'father_age',
        'mother',
        'mother_occupation',
        'mother_age',
        'provincial_address',
       'city_address',
        'parent_contact',
        'guardian_address',
        'guardian_contact',
        'personToContact',
        'emergency_address',
        'emergency_contact',
    ];

    use HasFactory;
}
