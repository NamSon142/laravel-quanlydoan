<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'start_date',
        'complete_date',
        'thesis_start_date',
        'thesis_end_date',
        'file_path',
        'comment',
        'total_score',
        'result',
        'topic_id',
        'major_id',
        'school_year_id',
        'council_id',
        'lecturer_id',
    ];
}
