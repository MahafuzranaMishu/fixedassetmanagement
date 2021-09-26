<?php

namespace App\Http\Controllers;
use App\Models\Allocation;
use App\Models\Asset;
use App\Models\User;
use App\Models\Stock;
use App\Models\Repair;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Purchase;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $asset=Asset::count();
        $purchase=Purchase::count();
        $stocks=Stock::count();
        $repairs=Repair::count();
        $allocation=Allocation::count();
        $user=User::count();
        $category=Category::count();
        $supplier=Supplier::count();
        return view('backend.layouts.home',compact('asset','purchase','repairs','allocation','stocks','user','category','supplier'));
        
        
        
    }
    public function contact()
    {
        return view('backend.layouts.contact');
    }
    
  
    
}
