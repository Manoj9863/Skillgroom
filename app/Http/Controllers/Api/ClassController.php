<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UI\Classes;

use App\Models\UI\Partners;

use App\Models\UI\Inquiry;

class ClassController extends Controller
{
    public function store_classes(Request $request)
    {
        $Classes = new Classes();

        $Classes->teacher_id = $request->teacher_id;
        $Classes->class_name = $request->classes;
        $Classes->first_name = $request->first_name;
        $Classes->last_name = $request->last_name;
        $Classes->email = $request->email;
        $Classes->contact = $request->contact;
        $Classes->country = $request->country;
        $Classes->state = $request->state;
        $Classes->city = $request->city;

        $SaveClasses = $Classes->save();

        if($SaveClasses){
            return response()->json(array(
                "error"=>False,
                "message"=>"Class Booked Successfully"
            ));
        }else{
            return response()->json(array(
                "error"=>TRUE,
                "message"=>"Failed"
            ));
        }
    }


    public function store_partners(Request $request)
    {
        $Partners = new Partners();

        $Partners->name = $request->name;
        $Partners->email = $request->email;
        $Partners->mobile = $request->mobile;
        $Partners->state = $request->state;
        $Partners->city = $request->city;
        $Partners->tution = $request->tution;
        $Partners->subjects = $request->subjects;
        $Partners->standard = $request->standard;
        $Partners->education = $request->education;
        $Partners->no_of_students = $request->no_of_students;
        $Partners->website = $request->website;

        $SavePartners = $Partners->save();

        if($SavePartners){
            return response()->json(array(
                "error"=>False,
                "message"=>"Partners Added Successfully"
            ));
        }else{
            return response()->json(array(
                "error"=>TRUE,
                "message"=>"Failed"
            ));
        }
    }

    public function store_inquiry(Request $request)
    {
        $Inquiry = new Inquiry();

        $Inquiry->name = $request->name;
        $Inquiry->email = $request->email;
        $Inquiry->mobile = $request->mobile;
        $Inquiry->location = $request->location;
        $Inquiry->category = $request->category;
        $Inquiry->inquiry = $request->inquiry;

        $SaveInquiry = $Inquiry->save();

        if($SaveInquiry){
            return response()->json(array(
                "error"=>False,
                "message"=>"Inquiry Updated Successfully. We will contact you soon..."
            ));
        }else{
            return response()->json(array(
                "error"=>TRUE,
                "message"=>"Failed"
            ));
        }
    }
}
