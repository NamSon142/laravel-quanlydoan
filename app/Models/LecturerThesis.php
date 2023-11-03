<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerThesis extends Model
{
    use HasFactory;
    protected $fillable = [
        'lecturer_id',
        'thesis_id',
    ];
}
