<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
   
    protected $fillable = [
        'lesson',
        'plan',
        'homework',
        'group-id',
        'day',
        'group_id',
    ];
}