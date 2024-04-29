<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
   
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];
}