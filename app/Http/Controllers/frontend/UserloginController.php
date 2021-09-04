<?php

namespace App\Http\Controllers\frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       User::create([
           'name'=>$request->user_name,
           'email'=>$request->email,
            'password'=>$request->password,
            'mobileno'=>$request->mobileno
        ]);
              
        return redirect()->back()->with('success','User Registration Successful.');
    }
}
