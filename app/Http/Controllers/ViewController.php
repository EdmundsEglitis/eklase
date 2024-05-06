<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Grade;
use App\Models\All_lessons;
use Illuminate\Http\Request;
use App\Models\User;
class ViewController extends Controller{

    public function viewLessons()
    {
        // Logic for viewing lessons
    }

    public function viewGrades()
    {
            // Get the authenticated user
    $user = Auth::user();

    
    $grades = Grade::where('student_id', $user->id)
                   ->with('lesson')
                   ->get();


    $gradeAttributes = [];
    foreach ($grades as $grade) {
        $gradeAttributes[] = $grade->getAttributes();
    }
    
    

    foreach($gradeAttributes as $gradeAttribute){
    $lessonNames = All_lessons::find($gradeAttribute["lesson_id"]);
    $lessonName[] = $lessonNames->getAttributes();
    }
    //
    return view('/user/view-grades', compact('gradeAttributes', 'lessonName'));
    }

}