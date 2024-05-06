<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllLesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'lessons',
    ];
}
