<?php

namespace App\Http\Controllers\backend;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('backend.layouts.Manager.login');
    }
    public function Admin()
    {
        $Admins=Admin::all();
        return view('backend.layouts.Manager.list',compact('Admins'));
    }
    public function Create()
    {
        return view('backend.layouts.Manager.create');
        
    }
    public function Store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       Admin::create([
           'name'=>$request->user_name,
           'email'=>$request->email,
            'password'=>$request->password,
            'mobileno'=>$request->mobileno
        ]);
        return redirect()->route('Manager.list');    
       }  
}
