<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentThesis extends Model
{
    use HasFactory;
    protected $fillable = [
        'studen_id',
        'thesis_id',
    ];
}
