<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'reg_no',  // Add all the fields that you want to allow
        'full_name',
        'email',
        'course',
        'year_of_study',
    ];
}
