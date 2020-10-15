<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Authendication;

use Illuminate\Support\Facades\Hash;


class TeachersController extends Controller
{
    public function teachers_lists(){
        $Teachers = Authendication::where('user_type', 2)->orderBy('created_at', 'DESC')->get();
        return view('Admin.teachers.teachers_list', compact('Teachers'));

    }

    public function add_teacher(){
        return view('Admin.teachers.add_teacher');

    }

    public function edit_teacher($id){
        $Teachers = Authendication::where('id', $id)->first();
        return view('Admin.teachers.edit_teachers', compact('Teachers'));

    }

    public function store_teachers(Request $request){
        $Teachers = new Authendication();

        $Teachers->name = $request->name;
        $Teachers->email = $request->email;
        $Teachers->mobile = $request->mobile;
        $Teachers->password = Hash::make($request->password);
        $Teachers->user_type = 2;

        $InsertTeachers = $Teachers->save();

        return redirect()->back()->with('message','Teacher Added Successfully');
    }

    public function update_teachers(Request $request){
        $id = $request->id;

        $Teachers = Authendication::where('id', $id)->first();

        $Teachers->name = $request->name;
        $Teachers->email = $request->email;
        $Teachers->mobile = $request->mobile;
        // $Teachers->password = Hash::make($request->password);
        // $Teachers->user_type = 2;

        $InsertTeachers = $Teachers->save();

        return redirect()->back()->with('message','Teacher Updated Successfully');
    }

    public function ChangeStatus(Request $request)
    {
    	// \Log::info($request->all());
        $user = Authendication::find($request->id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

}
