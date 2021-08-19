<?php

namespace App\Http\Controllers\backend;
use App\Models\Category;
use App\Models\Asset;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        //get all data from category table
        //DML- select * from categories;
        $categories=Category::paginate(2); // get(), first(),find();

       return view('backend.layouts.category.list',compact('categories'));
    }

    public function create()
    {
        return view('backend.layouts.category.create');
    }

    public function store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
        Category::create([
            'name'=>$request->category_name,
            'details'=>$request->description
        ]);

        return redirect()->route('category.list');
    }
    public function allasset($id)
    {
        $assets=Asset::where('category_id',$id)->get();
        return view('backend.layouts.category.assetlist',compact('assets'));
    }
}
