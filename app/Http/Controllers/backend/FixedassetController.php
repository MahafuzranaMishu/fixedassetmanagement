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
       // dd($request->all());
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

    public function delete($id)
    {

        $assets=Asset::find($id);
        if($assets)
        {
            $assets->delete();
            return redirect()->back()->with('message','Asset Deleted successfully.');
        }
        return redirect()->route('Asset.list')->with('message','No Asset found to delete.');
    }
       
    public function edit($id)
    {
        $Assets=Asset::find($id);
 //        dd($product);
        $categories=Category::all();
        return view('backend.layouts.asset.edit',compact('categories','Assets'));
    }

    public function update(Request $request,$id)
    {
 //        dd($request->all());
        $Assets=Asset::find($id);
        $Assets->update([
            'name'=>$request->asset_name,
            'category_id'=>$request->category_id,
            'details'=>$request->Details,
            'price'=>$request->price,
            'unit'=>$request->unit,
           // 'image'=>$fileName,
            'status'=>$request->status,
            'buyingdate'=>$request->date
        ]);

        return redirect()->route('Asset.list')->with('message','Asset updated successfully.');
    }

}
