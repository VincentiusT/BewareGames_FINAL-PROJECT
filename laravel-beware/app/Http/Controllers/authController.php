<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class authController extends Controller
{
    public function login(){
        return view('auths.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function register(){
        return view('auths.register');
    }

    public function postregister(Request $request){
        $user = new \App\Models\User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->remember_token = Str::random(60);

        $user->save();
        return redirect('/login');
    }
}
