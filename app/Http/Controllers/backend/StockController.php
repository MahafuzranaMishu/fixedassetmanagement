<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function Stock()
    {
        return view('backend.layouts.Stock.create');
    }
}
