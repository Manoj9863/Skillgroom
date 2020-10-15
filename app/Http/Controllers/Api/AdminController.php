<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
        $Email = $request->email;
        $Password = $request->password;

        if (Auth::guard('super_admin')->attempt(['email' => $Email, 'password' => $Password])) {
            $request->session()->put('AdminName', Auth::guard('super_admin')->user()->name);
            $request->session()->put('AdminEmail', Auth::guard('super_admin')->user()->email);
            $request->session()->put('AdminId', Auth::guard('super_admin')->user()->id);
            return response()->json(array(
                "error"=>FALSE,
                "message"=> "Login successfully",
                "type" => 1
            ));
        }else{
            return response()->json(array(
                "error"=>TRUE,
                "message"=> "Please check your credentials."
            ));
        }
    }
}
