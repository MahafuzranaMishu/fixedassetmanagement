<?php

namespace App\Http\Controllers\frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserloginController extends Controller
{
    
    // public function login()
    // {
        // return view('frontend.layouts.user.home');
    // }

    public function home()
    {
        return view('frontend.layouts.user.login');
    }

    public function dologin(Request $request)
    {
      //  dd($request->all());
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            if(auth()->user()->role=='user')
           {
            return redirect()->route('user.home');
           } else
           {
              
               return redirect()->route('home');
           }
            //user logged in
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('users.login');
    }
}

