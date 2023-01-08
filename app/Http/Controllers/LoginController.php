<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('back.login');
    }

    public $email, $password;

    public function postlogin(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        $creds = array('email'=>$input['email'], 'password'=>$input['password']);

        if(Auth::guard('web')->attempt($creds)){
            if(auth()->user()->status == 1){
                if(auth()->user()->level == 1){
                    return redirect()->route('superadmin.dashboard');
                }elseif(auth()->user()->level == 2){
                    return redirect()->route('admin.dashboard');
                }elseif(auth()->user()->level == 3){
                    return redirect()->route('agency.dashboard');
                }
            }elseif(auth()->user()->status == 2){
                Auth::guard('web')->logout();
                return redirect()->route('login')->with('fail', 'Your account has been disabled');
            }
        }else{
            return redirect()->route('login')->with('fail', 'Your account has been disabled');
        }
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
