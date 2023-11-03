<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'fullname',
        'email',
        'phone',
        'birth',
        'gender',
        'address',
        'avatar',
        'gpa',
        'status',
        'user_id',
        'major_id',
        'school_year_id',
    ];
}
