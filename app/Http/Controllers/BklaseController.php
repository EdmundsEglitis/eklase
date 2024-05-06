<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Lesson;

class BklaseController extends Controller
{
    public function __invoke(){
        // Identify the user
        $user = auth()->user();
    
        // Determine the user's group
        $userGroup = $user->{"group-id"};
    
    
        // Fetch lessons for the user's group for the current week
        $groupLessons = Lesson::where('group_id', $userGroup)
        ->where('day', 'Monday')
        ->get();
        // Pass the lessons and other necessary data to the view
        return view('bklase', compact('user', 'groupLessons'));
    }

}