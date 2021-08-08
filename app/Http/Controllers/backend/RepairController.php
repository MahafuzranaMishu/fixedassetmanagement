<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function Repair()
    {
        return view('backend.layouts.Repair.Create');
    }
}
