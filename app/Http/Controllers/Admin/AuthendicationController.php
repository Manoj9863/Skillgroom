<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Redirect;
use Session;

use App\Models\Admin\Authendication;

class AuthendicationController extends Controller
{
    public function admin_login(Request $request){
        $Email = $request->email;
        $Password = $request->password;

        $CheckEmail =Authendication::where('email', $Email)->first();

        if($CheckEmail == null){

            return redirect()->back()->with('message','Please check your credentials');

        }else{

            if($CheckEmail->status == 0){

                return redirect()->back()->with('message','Your account is not activated. Please contact your administrator...');
                    
            }elseif($CheckEmail->user_type == 1){
                if (Auth::guard('super_admin')->attempt(['email' => $Email, 'password' => $Password])) {
                    $request->session()->put('AdminName', Auth::guard('super_admin')->user()->name);
                    $request->session()->put('AdminEmail', Auth::guard('super_admin')->user()->email);
                    $request->session()->put('AdminId', Auth::guard('super_admin')->user()->id);
                    // return response()->json(array(
                    //     "error"=>FALSE,
                    //     "message"=> "Login successfully",
                    //     "type" => 1
                    // ));
                    return redirect('admin/dashboard');
                }else{
                    return redirect()->back()->with('message','Please check your credentials');
                    
                }
            }elseif($CheckEmail->user_type == 2){
                if (Auth::guard('teacher')->attempt(['email' => $Email, 'password' => $Password])) {
                    $request->session()->put('Teacherame', Auth::guard('teacher')->user()->name);
                    $request->session()->put('TeacherEmail', Auth::guard('teacher')->user()->email);
                    $request->session()->put('TeacherId', Auth::guard('teacher')->user()->id);
                    // return response()->json(array(
                    //     "error"=>FALSE,
                    //     "message"=> "Login successfully",
                    //     "type" => 1
                    // ));
                    return redirect('admin/teachers/dashboard');
                }else{
                    return redirect()->back()->with('message','Please check your credentials');
                    
                }
            }
        }
        
    }
    

    public function admin_logout()
    {
        Auth::guard('super_admin')->logout();
        return redirect('/admin/login');
    }


    public function teacher_logout()
    {
        Auth::guard('teacher')->logout();
        return redirect('/admin/login');
    }
}
