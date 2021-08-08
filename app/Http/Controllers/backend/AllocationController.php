<?php

namespace App\Http\Controllers\backend;
use App\Models\Allocation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllocationController extends Controller
{
    public function Allocation()
    {
        return view('backend.layouts.Allocation.Create');
    }
    Public function Create()
    {
        return view('backend.layouts.Allocation.list');
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

              
        return redirect()->back();
    }
}
