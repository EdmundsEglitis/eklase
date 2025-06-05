<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Lesson;
use App\Models\User;
use App\Models\AllLesson;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{

    public function create(){
        return view("/Admin/create-lessons");
    }
    public function store(Request $request){
            $groupId = $request['group_id'];
            $day = $request["day"];
            //dd($groupId);
            foreach ($request['lessons'] as $asd) {
                //dd($asd);
                $lesson = new Lesson();
    
                // Assign values to the lesson instance
                $lesson->lesson = $asd['lesson'];
                $lesson->plan = $asd['plan'];
                $lesson->homework = $asd['homework'];
                $lesson->day = $day;
                $lesson->group_id = $groupId;
    
                // Save the lesson to the database
                $lesson->save();
            }
        // Return a success response
        return view('/Admin/create-lessons')->with('success', 1);
    }

    public function update()
    {
        // Logic for updating lessons
    }

    public function view(){
        return view("/Admin/delete-lessons");
    }
    public function delete(Request $request)
    {

            $groupId = $request->input('group_id');

            // Delete lessons where group_id matches the specified group ID
            $deletedRows = Lesson::where('group_id', $groupId)->delete();

            if ($deletedRows > 0) {
                // Set success flash message
                $message = 'Lessons deleted successfully';
                return redirect()->back()->with('success', $message);
            } else {
                // Set error flash message if no lessons were deleted
                $message = 'No lessons found for the specified group ID';
                return redirect()->back()->with('error', $message);
            }

            // Set error flash message
            $message = 'Failed to delete lessons';
            return redirect()->back()->with('error', $message);
        }
    


    public function viewAll(){
        $lessons = Lesson::all();
        return view('/Admin/show-all', compact('lessons'));
    }

    public function specific($groupId)
    {        
        // Fetch lessons for the specified group ID
        $lessons = Lesson::where('group_id', $groupId)->get();
        // Pass the lessons and group ID to the view
        return view('/Admin/view_group_lessons', compact('lessons', 'groupId'));
    }
    public function updateGroup(Request $request, $groupId, $day){
        $lessons = Lesson::where('group_id', $groupId)
                            ->where('day', $day)
                            ->get();
        return view('/Admin/update-group', compact('lessons', 'groupId', 'day'));
    }

    public function updateLessons(Request $request)
    {
        $lessonData = $request->input('lessons');
        $groupId=$request["group-id"];
    
            DB::beginTransaction();

            foreach ($lessonData as $lessonId => $data) {
                $lesson = Lesson::find($lessonId);
                $lesson->lesson = $data['lesson'];
                $lesson->plan = $data['plan'];
                $lesson->homework = $data['homework'];

                $lesson->save();
            }
            DB::commit();
            return redirect("/show-all");
}

public function grade(Request $request)
{
    if ($request->isMethod('get') && $request->filled('group-id') && $request->filled('lesson_id')) {
        $groupId = $request->query('group-id');
        $lessonId = $request->query('lesson_id');
       
        // Fetch students based on the selected group
        $students = User::where('group-id', $groupId)->get();

        // ✅ This is where you prepare data for the view
        $usersAttributes = $students->map(function ($user) {
            return $user->getAttributes();
        });

        $lessonNames = AllLesson::where('lessons', $lessonId)->first();

        $lessonName = $request["lesson_id"];

        return view('/Admin/grade-students', compact('usersAttributes', 'groupId', 'lessonName', 'lessonId'));
    } else {
        return view('/Admin/grade-students');
    }
}







public function saveGrades(Request $request)
{
    // Retrieve the lesson ID from the request
    $lessonId = $request->input('lesson_id');
    
    // Iterate over the form input to extract the student IDs and grades
    foreach ($request->input() as $key => $value) {
        // Check if the input key starts with 'grade'
        if (strpos($key, 'grade') === 0) {
            // Extract the student ID from the input name
            $studentId = substr($key, 5);

            // Validate the grade value (optional)
            $grade = intval($value);
            if ($grade < 0 || $grade > 10) {
                // Handle invalid grade value (e.g., display an error message)
                return redirect()->back()->with('error', 'Invalid grade value for student ' . $studentId);
            }

            // Save the grade to the database
            Grade::create([
                'student_id' => $studentId,
                'lesson_id' => $lessonId,
                'grade' => $grade,
            ]);
        }
    }

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Grades saved successfully');
}
}