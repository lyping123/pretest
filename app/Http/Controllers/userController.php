<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view("register");
    }

    public function login_user(Request $request){
        $formField=$request->validate([
            "name"=>"required|max:50",
            "password"=>"required|min:3"
        ]);

        Auth::attempt($formField);

        if(Auth::check()){
            return redirect("home");
        }else{
            return response("login failed");
        }
    }

    public function register_user(Request $request){
        $formField=$request->validate([
            "name"=>"required|max:50",
            "password"=>"required|min:3|confirmed"
        ]);

        $user=User::create($formField);
        if($user){
            return redirect("/login")->with("success","register success");
        }
        return back()->withErrors("message","login fail");
    }
}
