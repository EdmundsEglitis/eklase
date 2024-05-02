<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Lesson;
use Illuminate\Http\Request;

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
    


    public function grade()
    {
        // Logic for grading lessons
    }

    public function viewAll()
    {
        // Logic for viewing all lessons
    }
}
