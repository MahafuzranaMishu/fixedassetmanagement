<?php

namespace App\Http\Controllers\backend;
use App\Models\Purchase;
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
              
        //  $check= Stock::were('asset_id',$request->asset_id)->first;
        //    if($check)
        //    {
               //p
        //    }else
        //    {
               //create
        //    }


        return redirect()->route('Purchase.list');  
    }
}
