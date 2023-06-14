<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsnList extends Model
{
    protected $fillable = [
        'usn',
        'fname',
        'lname',

    ];

    use HasFactory;
}
