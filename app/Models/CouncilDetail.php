<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouncilDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'council_id',
        'lecturer_id',
        'position',
    ];
}
