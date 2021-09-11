<?php

namespace App\Http\Controllers\backend;
use App\Models\Asset;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FixedassetController extends Controller
{
    public function Asset()
    {
        $Assets=Asset::with('Category')->paginate(1);
        return view('backend.layouts.Asset.list',compact('Assets'));
        
    }
    public function Create()
    {
        $categories=Category::all();
        return view('backend.layouts.Asset.create',compact('categories'));
    }
    public function Store(Request $request)
    {
        dd($request->all());
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form

   $fileName='';
   if($request->hasFile('image'))
   {
    $file=$request->file('image');
   //generate file name here
    $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
    $file->storeAs('/uploads',$fileName);
   }
       Asset::create([
           'name'=>$request->asset_name,
           'category_id'=>$request->category_id,
           'details'=>$request->Details,
            'price'=>$request->price,
            'unit'=>$request->unit,
            'image'=>$fileName,
            'status'=>$request->status,
            'buyingdate'=>$request->date

        ]);
              
        return redirect()->route('Asset.list'); 
    }
}
