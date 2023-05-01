<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yearlevel extends Model
{
    use HasFactory;

    public function fill_up(){
        return $this->hasMany(FillUp::class);
    }
}
