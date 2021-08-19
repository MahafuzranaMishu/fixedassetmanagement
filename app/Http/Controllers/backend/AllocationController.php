<?php

namespace App\Http\Controllers\backend;
use App\Models\Allocation;
use App\Models\Asset;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllocationController extends Controller
{
    public function Create()
    {
        $Assets=Asset::all();
        $Users=User::all();
        return view('backend.layouts.Allocation.Create',compact('Assets','Users'));
    }
    Public function Allocation()
    {
        $Allocations=Allocation::with('Asset','User')->paginate(1);
      
        return view('backend.layouts.Allocation.list',compact('Allocations'));
    }
    public function Store(Request $request)

    {
     
        
     
        //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       Allocation::create([
           
           'user_id'=>$request->userid,
           'username'=>$request->username,
           'assets_id'=>$request->assetid,
            'assetname'=>$request->assetname,
            'details'=>$request->status,
            'allocationdate'=>$request->date

        ]);

              
        return redirect()->route('Allocation.list'); 
    }
}
