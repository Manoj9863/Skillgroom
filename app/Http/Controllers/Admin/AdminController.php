<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UI\Classes;

use App\Models\UI\Partners;

use App\Models\UI\Inquiry;
use Illuminate\Support\Facades\Auth;

use Session;

class AdminController extends Controller
{
    public function login(){
        return view('Admin.login');

    }
    
    public function dashboard(){

        if(Auth::guard('super_admin')->check()){
            $Classes = Classes::count();
        }elseif(Auth::guard('teacher')->check()){
            $id = Session::get('TeacherId');

            $Classes = Classes::where('teacher_id', $id)->count();
        }

        $Partners = Partners::count();
        $Inquiry = Inquiry::count();
        return view('Admin.layouts.dashboard', compact('Classes', 'Partners', 'Inquiry'));
    }


    public function classes(){

        if(Auth::guard('super_admin')->check()){
            $Classes = Classes::orderBy('created_at', 'DESC')->paginate(30);
        }elseif(Auth::guard('teacher')->check()){
            $id = Session::get('TeacherId');

            $Classes = Classes::where('teacher_id', $id)->orderBy('created_at', 'DESC')->paginate(30);
        }
        

        
        return view('Admin.layouts.classes', compact('Classes'));
    }

    public function partners(){
        $Partners = Partners::paginate(30);
        return view('Admin.layouts.partners', compact('Partners'));
    }

    public function inquiry(){
        $Inquiry = Inquiry::paginate(30);
        return view('Admin.layouts.inquiry', compact('Inquiry'));
    }
}
