<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
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
        'user_id',
        'position_id',
        'department_id',
    ];
}
