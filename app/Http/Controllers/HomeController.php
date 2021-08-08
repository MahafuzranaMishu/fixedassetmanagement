<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('backend.layouts.home');
        
        
    }
    public function contact()
    {
        return view('backend.layouts.contact');
    }
    
  
    
}
