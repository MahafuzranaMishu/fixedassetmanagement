<?php

namespace App\Http\Controllers\backend;
use App\Models\Allocation;
use App\Models\Asset;
use App\Models\AssetRequest;
use App\Models\User;
use App\Models\Stock;
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
        $Allocations=Allocation::with('Asset','User')->paginate(5);
      
        return view('backend.layouts.Allocation.list',compact('Allocations'));
    }
    Public function report()
    {
        $Allocations=Allocation::with('Asset','User')->paginate(5);
      
        return view('backend.layouts.Allocation.report',compact('Allocations'));
    }
    public function Store(Request $request)
    {

        // dd($request->all());
        $checkStock =Stock::where('asset_id', $request->assetid)->first();

        if($checkStock)
        {
        // dd($request->all());
            
            
        if($checkStock->Unit >= $request->input('unit')){
        
        
       Allocation::create([
           
            'user_id'=>$request->userid,
            'asset_id'=>$request->assetid,
            'details'=>$request->status,
            'unit'=>$request->unit,
            'allocationdate'=>$request->date

        ]);

          $checkStock->decrement('unit',$request->input('unit'));
          return redirect()->back()->with('message','Allocated Successfully');
        }
        else
        {

            return redirect()->back()->with('message','Item is stock out');
        }
        
    }

    return redirect()->back()->with('message','item not found');    
        
    }
    public function delete($id)
    {

        $Allocations=Allocation::find($id);
        if($Allocations)
        {
            $Allocations->delete();
            return redirect()->back()->with('message','Allocation info Deleted successfully.');
        }
        return redirect()->route('Asset.list')->with('message','No Allocation found to delete.');
    }

    public function edit($id)
    {
        $Allocations=Allocation::find($id);
        $Assets=Asset::all();
        $Users=User::all();
        return view('backend.layouts.Allocation.edit',compact('Allocations','Assets','Users'));
    }
    public function update(Request $request,$id)
    {
 //        dd($request->all());
        $Allocations=Allocation::find($id);
        $Allocations->update([
            'user_id'=>$request->userid,
            'asset_id'=>$request->assetid,
            'details'=>$request->status,
            'unit'=>$request->unit,
        ]);

        return redirect()->route('Allocation.list')->with('message','Allocation info updated successfully.');
    }

    Public function request()
    {
        $Allocationreq=AssetRequest::with('Asset','User')->paginate(5);
      
        return view('backend.layouts.Allocation.request',compact('Allocationreq'));
    }
     
    Public function stockrequest()
    {
        $Allocationreq=AssetRequest::with('Asset','User')->where('is_requested',1)->paginate(5);
      
        return view('backend.layouts.Allocation.stockrequest',compact('Allocationreq'));
    }
    public function approve($id,$status)
     {
        $Allocationreq=AssetRequest::find($id);
       if($status=='approved')
       {
        $Allocationreq->update([
               'status' => $status
           ]);
       }else{
        $Allocationreq->update([
            'status' => $status
        ]);
       }

     return redirect()->back()->with('message','Asset approved sucessfully'); 
     }

}
