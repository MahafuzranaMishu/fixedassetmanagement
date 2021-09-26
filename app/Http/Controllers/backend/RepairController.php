<?php

namespace App\Http\Controllers\backend;
use App\Models\Repair;
use App\Models\Asset;
use App\Models\Allocation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function Create()
    {
        $Assets=Asset::all();
        $Allocations=Allocation::all();
        
        return view('backend.layouts.Repair.Create',compact('Assets','Allocations'));
    }
    public function Repair()
    {
        $Repairs=Repair::with('Asset','Allocation')->paginate(1);
        return view('backend.layouts.Repair.list',compact('Repairs'));
    }
    public function Store(Request $request)

    {
        
        $allocation =Allocation::findOrFail($request->allocationid);
        
        //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
    $repair= Repair::create([
           
           
            'asset_id'=>$request->assetid,
            'allocation_id'=>$request->allocationid,
            'reason'=>$request->details,
            'repaircompanyname'=>$request->Companyname,
            'deliverydate'=>$request->date
         
        ]);
       
        if($repair)
        {
            $repair->allocation()->delete();
        }
        return redirect()->back()->with('message','Item added in Repair list successfully.');
    }
    public function edit($id)
    {
        $repair=Repair::find($id);
        $Assets=Asset::all();
        $Allocations=Allocation::all();
        
        return view('backend.layouts.Repair.edit',compact('repair','Assets','Allocations'));
    }
    
    public function update(Request $request,$id)
    {
 //        dd($request->all());
        $Repairs=Repair::find($id);
        $Repairs->update([
            'asset_id'=>$request->assetid,
            'allocation_id'=>$request->allocationid,
            'reason'=>$request->details,
            'repaircompanyname'=>$request->Companyname,
            'deliverydate'=>$request->date
        ]);

        return redirect()->route('Repair.list')->with('message','Repair info updated successfully.');
    }

    public function delete($id)
    {

        $Repairs=Repair::find($id);
        if($Repairs)
        {
            $Repairs->delete();
            return redirect()->back()->with('message','Purchase info Deleted successfully.');
        }
        return redirect()->route('Repair.list')->with('message','No Purchase found to delete.');
    }
}
