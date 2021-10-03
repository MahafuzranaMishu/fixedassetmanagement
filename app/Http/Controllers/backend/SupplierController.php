<?php

namespace App\Http\Controllers\backend;
use App\Models\Supplier;
use App\Models\Purchase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function Supplier()
    {
        $supply=Supplier::Paginate(5);
        return view('backend.layouts.Supplier.list',compact('supply'));
    }

    Public function Create()
    {
        return view('backend.layouts.Supplier.create');
    }
    public function allasset($id)
    {
        $assets=Purchase::where('supplier_id',$id)->get();
        
        return view('backend.layouts.Supplier.allasset',compact('assets'));
    }

    public function Store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
    Supplier::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'mobileno'=>$request->mobileno,
         'address'=>$request->Address

        ]);
              
        return redirect()->route('Supplier.list');  
    }

    public function delete($id)
    {

        $supplier=Supplier::find($id);
        if($supplier)
        {
            $supplier->delete();
            return redirect()->back()->with('message','Asset Deleted successfully.');
        }
        return redirect()->route('Asset.list')->with('message','No Asset found to delete.');
    }
    public function edit($id)
    {
        $suppliers=Supplier::find($id);
 //        dd($product);
        
        return view('backend.layouts.supplier.edit',compact('suppliers'));
    }

    public function update(Request $request,$id)
    {
 //        dd($request->all());
        $suppliers=Supplier::find($id);
        $suppliers->update([
         'name'=>$request->name,
         'email'=>$request->email,
         'mobileno'=>$request->mobileno,
         'address'=>$request->Address
        ]);

        return redirect()->route('Supplier.list')->with('message','Supplier info updated successfully.');
    }
}


