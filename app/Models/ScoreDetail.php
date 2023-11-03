<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'score',
        'score_id',
    ];
}
