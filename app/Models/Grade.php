<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'lesson_id',
        'grade',
    ];

    // Define the relationships
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}