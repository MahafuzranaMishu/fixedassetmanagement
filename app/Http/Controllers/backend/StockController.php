<?php

namespace App\Http\Controllers\backend;
use App\Models\Stock;
use App\Models\Asset;
use App\Models\Purchase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function create()
    {
        return view('backend.layouts.Stock.create');
    }
    public function Stock()
    {   
        $Stocks=Stock::with('Asset')->paginate(5);
        return view('backend.layouts.Stock.list',compact('Stocks'));
    }
    public function Store(Request $request)

    {
     
        
       Stock::create([
           
           
           'asset_id'=>$request->assetid,
            
            'unit'=>$request->Unit


        ]);

              
        return redirect()->route('Stock.list');  
    }

    public function delete($id)
    {

        $Stocks=Stock::find($id);
        if($Stocks)
        {
             $Stocks->delete();
            return redirect()->back()->with('message','Stock info Deleted successfully.');
        }
        return redirect()->route('Stock.list')->with('message','No Purchase found to delete.');
    }

    public function edit($id)
    {
        $Stocks=Stock::find($id);

        $purchases=Purchase::all();
        $Assets=Asset::all();
        
   
        
        return view('backend.layouts.Stock.edit',compact('Stocks','Assets','purchases'));
    }
    public function update(Request $request,$id)
    {
 //        dd($request->all());
        $stocks=Stock::find($id);
        $stocks->update([
            'asset_id'=>$request->asset_id,
            'unit'=>$request->Unit
        ]);

        return redirect()->route('Stock.list')->with('message','Stock info updated successfully.');
    }

}
