<?php

namespace App\Http\Controllers\frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserloginController extends Controller
{
    public function signup()
    {
        return view('frontend.layouts.user.signup');
    }
    public function login()
    {
        return view('frontend.layouts.user.login');
    }
    public function signupstore(Request $request)
    {
       // dd($request->all());
      $request->validate([
            'user_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            'mobileno'=>'required'
        ]);
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       User::create([
            'name'=>$request->user_name,
            'email'=>$request->email,
            'mobileno'=>$request->mobileno,
            'role'=>'user',
            'password'=>$request->password,
            
        ]);
              
        return redirect()->back()->with('success','User Registration Successful.');
    }

    public function dologin(Request $request)
    {
      //  dd($request->all());
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('User.signup');
            //user logged in
        }
        return redirect()->back()->with('message','invalid user info.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('users.login');
    }
}
