<?php

namespace App\Http\Controllers\backend;
use App\Models\Purchase;
use App\Models\Stock;
use App\Models\Asset;
use App\Models\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function Purchase()
    {
        $Purchases=Purchase::with('Asset','Supplier')->Paginate(1);
        //dd($Purchases);
        return view('backend.layouts.Purchase.list',compact('Purchases'));
    }

    Public function Create()
    {
        $Assets=Asset::all();
        $suppliers=Supplier::All();
        return view('backend.layouts.Purchase.create',compact('Assets','suppliers'));
    }

    public function Store(Request $request)
    {
        // dd($request->all());
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       Purchase::create([
           'asset_id'=>$request->asset_id,
           'supplier_id'=>$request->supplier_id,
           'unit'=>$request->Unit,
           'details'=>$request->Details,
            'price'=>$request->price,
            
            'image'=>$request->image,
            'status'=>$request->status,
            'buyingdate'=>$request->date

        ]);
              
         $check= Stock::where('asset_id',$request->asset_id)->first();
         
           if($check)
           {
             $check->increment('unit',$request->Unit);
           }else
           {
            Stock::create([
                'asset_id'=>$request->asset_id,
                'unit'=>$request->Unit
            ]);
           }


        return redirect()->route('Purchase.list');  
    }

    public function delete($id)
    {

        $purchases=Purchase::find($id);
        if($purchases)
        {
            $purchases->delete();
            return redirect()->back()->with('message','Purchase info Deleted successfully.');
        }
        return redirect()->route('Asset.list')->with('message','No Purchase found to delete.');
    }
     
    public function edit($id)
    {
        $purchases=Purchase::find($id);
        $Assets=Asset::all();
        $suppliers=Supplier::All();
 //        dd($product);
        
        return view('backend.layouts.purchase.edit',compact('purchases','Assets','suppliers'));
    }

    public function update(Request $request,$id)
    {
 //        dd($request->all());
        $purchases=Purchase::find($id);
        $purchases->update([
            'asset_id'=>$request->asset_id,
            'supplier_id'=>$request->supplier_id,
            'unit'=>$request->Unit,
            'details'=>$request->Details,
            'price'=>$request->price
        ]);

        return redirect()->route('Supplier.list')->with('message','Supplier info updated successfully.');
    }
}
