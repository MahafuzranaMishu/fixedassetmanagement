<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User()
    {
        $users=User::all();
        
        return view('backend.layouts.User.list',compact('users'));
    }
    public function create()
    {
        return view('backend.layouts.User.create');
    }
    public function login()
    {
        return view('backend.layouts.User.login');
    }
    public function store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       User::create([
           'name'=>$request->user_name,
           'email'=>$request->email,
            'password'=>$request->password,
            'mobileno'=>$request->mobileno
        ]);
              
        return redirect()->route('User.list');
    }
}
