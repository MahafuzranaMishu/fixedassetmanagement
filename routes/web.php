<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\EmployeController;
use App\Http\Controllers\backend\FixedassetController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\backend\AllocationController;
use App\Http\Controllers\backend\RepairController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/',function (){
    return view('backend.layouts.home');
});
Route::get('/contact',function (){
    return view('backend.layouts.contact');
});*/
Route::get('/',[HomeController::class,'home'])->name('home.start');
Route::get('/contact',[HomeController::Class,'contact']);

Route::get('/User',[UserController::class,'User'])->name('User.list');
Route::get('/user/create',[UserController::class,'create'])->name('User.create');
Route::post('/user/store',[UserController::class,'store',])->name('User.store');

Route::get('/Asset',[FixedassetController::class,'Asset'])->name('Asset.list');
Route::get('/Asset/add',[FixedassetController::class,'Create'])->name('Asset.create');
Route::post('/Asset/store',[FixedassetController::class,'Store'])->name('Asset.store');

Route::get('/Admin',[AdminController::class,'Admin'])->name('Manager.list');
Route::get('/Admin/add',[AdminController::Class,'Create'])->name('Manager.create');
Route::post('/Admin/store',[AdminController::Class,'Store'])->name('Admin.store');

Route::get('/Purchase',[PurchaseController::class,'Purchase'])->name('Purchase.list');
Route::get('/Purchase/add',[PurchaseController::Class,'Create'])->name('Purchase.create');
Route::post('/Purchase/store',[PurchaseController::Class,'Store'])->name('Purchase.store');

Route::get('/Allocation/create',[AllocationController::class,'Allocation'])->name('Allocation.create');
Route::get('/Allocation',[AllocationController::Class,'Create'])->name('Allocation.list');
Route::post('/Allocation/Store',[AllocationController::Class,'Store'])->name('Allocation.Store');

Route::get('/Stock/create',[StockController::class,'Stock'])->name('Stock.Create');



Route::get('/Repair/create',[RepairController::class,'Repair'])->name('Repair.create');