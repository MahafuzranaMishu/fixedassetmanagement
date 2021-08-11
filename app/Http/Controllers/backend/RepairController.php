<?php

namespace App\Http\Controllers\backend;
use App\Models\Repair;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function Create()
    {
        return view('backend.layouts.Repair.Create');
    }
    public function Repair()
    {
        $Repairs=Repair::all();
        return view('backend.layouts.Repair.list',compact('Repairs'));
    }
    public function Store(Request $request)

    {
     
        
     
        //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       Repair::create([
           
           
           'assets_id'=>$request->assetid,
            'assetname'=>$request->assetname,
            'details'=>$request->details,
            'repaircompanyname'=>$request->Companyname,
            'deliverydate'=>$request->date

        ]);

              
        return redirect()->route('Repair.list');
    }
}
