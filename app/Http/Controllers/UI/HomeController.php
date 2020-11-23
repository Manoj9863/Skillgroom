<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Courses;


class HomeController extends Controller
{
    public function home(){
        $title = "Home";

        $Courses = Courses::select('courses.id', 'admin.id as TeacherId', 'courses.course_name', 'admin.name', 'courses.type','courses.fees', 'courses.featured_image')->join('admin','admin.id', '=', 'courses.teacher_id')->where('courses.status', 1)->orderBy('courses.created_at', 'DESC')->get();

        return view('UI.home', compact('Courses'));
    }

    public function partners(){
        $title = "Home";

        return view('UI.partners');
    }

    public function book_demo(){
        $title = "Book Demo";

        return view('UI.book_demo');
    }


    public function course_details($id){
        // $Teachers = Authendication::where('user_type', 2)->get();

        $Courses = Courses::where('id', $id)->first();
        return view('UI.course_details', compact('Courses'));

    }
}
