<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentinfo extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'usn',
        'birthday',
        'age',
        'address',
        'status',
        'sex',
        'middle_name',
    ];

    use HasFactory;
}
