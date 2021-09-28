<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Models\Stock;
use App\Models\Asset;
use App\Models\AssetRequest;
use App\Models\Allocation;
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
            'password'=>bcrypt($request->password),
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
            if(auth()->user()->role=='admin'|| auth()->user()->role=='user' )
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

    public function delete($id)
    {
//        Product::destroy($id);
        $users=User::find($id);
        if($users)
        {
            $users->delete();
            return redirect()->back()->with('message','User Deleted successfully.');
        }
        return redirect()->back()->with('message','No User found to delete.');
    }

  public function edit($id)
  {
      $users=User::find($id);
      return view('backend.layouts.user.edit',compact('users'));
  }  
  
  public function update(Request $request,$id)
  {
      $users=User::find($id);
      $users->Update([
        'name'=>$request->user_name,
        'designation'=>$request->designation,
        'email'=>$request->email,
        'password'=>$request->password,
        'mobileno'=>$request->mobileno,
        'address'=>$request->Address,
    ]);
    return redirect()->route('User.list')->with('message','User Info Updated successfully.');
  }
  public function allasset()
  {
       $assets=Allocation::where('user_id',auth()->user()->id)->get();
      return view('backend.layouts.User.userasset',compact('assets'));
  }

  public function userasset($id)
  {
      $assets=Allocation::where('user_id',$id)->get();
      return view('backend.layouts.user.userallocationasset',compact('assets'));
  }

    public function reqasset()
    {
      $Assets=Asset::all();
      $Users=User::all();
      return view('backend.layouts.User.assetrequest',compact('Assets','Users'));
    }

    public function requestasset(Request $request)
    {

        // dd($request->all());
        $checkStock =Stock::where('asset_id', $request->assetid)->first();

        if($checkStock)
        {
        // dd($request->all());
            
            
        if($checkStock->Unit >= $request->input('unit')){
        
        
       AssetRequest::create([
           
            'user_id'=>auth()->user()->id,
            'asset_id'=>$request->assetid,
            'unit'=>$request->unit,
            
            
            

        ]);

         
          return redirect()->back()->with('message','Requested Successfully');
        }
        else
        {

            return redirect()->back()->with('message','Asset is stock out');
        }
        
    }

    return redirect()->back()->with('message','item not found');    
        
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
