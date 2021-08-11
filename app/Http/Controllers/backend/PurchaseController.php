<?php

namespace App\Http\Controllers\backend;
use App\Models\Purchase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function Purchase()
    {
        $Purchases=Purchase::all();
        return view('backend.layouts.Purchase.list',compact('Purchases'));
    }

    Public function Create()
    {
        return view('backend.layouts.Purchase.create');
    }

    public function Store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
       Purchase::create([
           'name'=>$request->asset_name,
           'details'=>$request->Details,
            'price'=>$request->price,
            'image'=>$request->image,
            'status'=>$request->status,
            'buyingdate'=>$request->date

        ]);
              
        return redirect()->route('Purchase.list');  
    }
}
