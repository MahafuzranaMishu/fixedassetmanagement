<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       User::create([
            'name'=>$request->user_name,
            'designation'=>$request->designation,
            'email'=>$request->email,
            'password'=>$request->password,
            'mobileno'=>$request->mobileno,
            'address'=>$request->Address,
        ]);
              
        return redirect()->route('User.list');
    }
    

    public function login()
    {
        return view('backend.layouts.login');
    }

    public function loginPost(Request $request)
    {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            if(auth()->user()->role=='admin')
           {
            return redirect()->route('home.start');
           }else
           {
               Auth::logout();
               return redirect()->route('User.signup');
           }
            //user logged in
            
        }

        return redirect()->back()->with('message','invalid user info.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('Admin.login');
    }
    public function create()
    {
        return view('backend.layouts.User.create');
    }

    public function User()
    {
        $user=User::where('role','=','user')->get();
        return view('backend.layouts.user.list',compact('user'));
    }

    public function Admin()
    {

        $user=User::where('role','!=','user')->get();
        return view('backend.layouts.user.admin',compact('user'));
    }

    
  
}


 /* public function User()
    {
        $users=User::paginate(3);
        
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
    }*/
