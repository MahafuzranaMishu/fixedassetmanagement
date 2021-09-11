<?php

namespace App\Http\Controllers\backend;
use App\Models\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function Supplier()
    {
        $supply=Supplier::Paginate(1);
        return view('backend.layouts.Supplier.list',compact('supply'));
    }

    Public function Create()
    {
        return view('backend.layouts.Supplier.create');
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
}
