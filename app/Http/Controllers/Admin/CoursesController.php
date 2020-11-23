<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Courses;
use App\Models\Admin\Authendication;

class CoursesController extends Controller
{
    public function courses_lists(){
       
        $Courses = Courses::select('courses.id','courses.course_name', 'admin.name', 'courses.type','courses.fees', 'courses.featured_image', 'courses.status')->join('admin','admin.id', '=', 'courses.teacher_id')->orderBy('courses.created_at', 'DESC')->get();

        return view('Admin.courses.courses_list', compact('Courses'));

    }

    public function add_courses(){
        $Teachers = Authendication::where('user_type', 2)->get();

        return view('Admin.courses.add_course', compact('Teachers'));

    }

    public function edit_courses($id){
        $Teachers = Authendication::where('user_type', 2)->get();

        $Courses = Courses::where('id', $id)->first();
        return view('Admin.courses.edit_course', compact('Courses', 'Teachers'));

    }

    


    public function store_courses(Request $request){
        $Courses = new Courses();

        $Courses->course_name = $request->course_name;
        $Courses->teacher_id = $request->teacher_name;
        $Courses->type = $request->type;
        $Courses->fees = $request->fees;


        $extension = $request->file('featured_image')->getClientOriginalExtension();
        $dir = 'Admin/featured_image/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('featured_image')->move($dir, $filename);

        $Courses->featured_image = $filename;

        $InsertCourses = $Courses->save();

        return redirect()->back()->with('message','Courses Added Successfully');
    }


    public function update_courses(Request $request){
        $id = $request->id;

        $Courses = Courses::where('id', $id)->first();

        $Courses->course_name = $request->course_name;
        $Courses->teacher_id = $request->teacher_name;
        $Courses->type = $request->type;
        $Courses->fees = $request->fees;

        if($request->hasfile('featured_image')){
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $dir = 'Admin/featured_image/';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('featured_image')->move($dir, $filename);
    
            $Courses->featured_image = $filename;
        }else{
            $Courses->featured_image = $Courses->featured_image;
        }
        

        $InsertCourses = $Courses->save();

        return redirect()->back()->with('message','Courses Updated Successfully');
    }


    public function ChangeStatus(Request $request)
    {
    	// \Log::info($request->all());
        $user = Courses::find($request->id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
