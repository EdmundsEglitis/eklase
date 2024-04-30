<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   
    protected $fillable = [
        'title',
        'category',
        'imageURL',
        'description',
        'date_time',
    ];
}