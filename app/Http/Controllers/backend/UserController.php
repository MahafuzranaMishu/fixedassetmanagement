<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User()
    {
        return view('backend.layouts.User.list');
    }
    public function create()
    {
        return view('backend.layouts.User.create');
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
              
        return redirect()->back();
    }
}
