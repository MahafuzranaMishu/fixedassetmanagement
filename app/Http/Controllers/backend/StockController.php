<?php

namespace App\Http\Controllers\backend;
use App\Models\Stock;
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
        $Stocks=Stock::paginate(1);
        return view('backend.layouts.Stock.list',compact('Stocks'));
    }
    public function Store(Request $request)

    {
     
        
       Stock::create([
           
           
           'asset_id'=>$request->assetid,
            'assetname'=>$request->assetname,
            'unit'=>$request->Unit


        ]);

              
        return redirect()->route('Stock.list');  
    }
}
