<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class userController extends Controller
{
    public function register()
    {
        return view("dashboard.register");
    }
    public function postregister(Request $request)
    {
        $val=$request->validate([
            "username"=>"required",
            "email"=>"required|email",
            'password' => 'required|confirmed',
        ]);
        // dd($request->only("email","username","password"));
        $user=new User();
        $user->name=$request->username;
        $user->password=hash::make($request->password);
        $user->email=$request->email;
        if($user->save())
        {
            Session::flash('message', 'User Created Successfully'); 
        }
        else
        {
            Session::flash('alert-class', 'User not Created Successfully'); 

        }
        return redirect("/register");
    }
    public function login()
    {

        return view("dashboard.login");
    }
    public function postlogin(Request $request)
    {
        $val=$request->validate([
            "email"=>"required|email",
            'password' => 'required',
        ]);
        $user_data=$request->only("email","password");
        if (Auth::attempt($user_data))
        {
            return redirect("/product/index");
        }
        else
        {
            Session::flash('message', 'User Not Register'); 
            return redirect("/login");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
    
}
