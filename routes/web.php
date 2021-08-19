<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\EmployeController;
use App\Http\Controllers\backend\CategoryController;
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
Route::get('/test',function (){
    return view('backend.layouts.dash');
});
Route::get('/',[HomeController::class,'home'])->name('home.start');
Route::get('/contact',[HomeController::Class,'contact']);

Route::get('/User',[UserController::class,'User'])->name('User.list');
Route::get('/user/create',[UserController::class,'create'])->name('User.create');
Route::get('/user/login',[UserController::class,'login'])->name('User.login');
Route::post('/user/store',[UserController::class,'store',])->name('User.store');

Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/{id}/assets',[CategoryController::class,'allasset'])->name('category.asset');


Route::get('/Asset',[FixedassetController::class,'Asset'])->name('Asset.list');
Route::get('/Asset/add',[FixedassetController::class,'Create'])->name('Asset.create');
Route::post('/Asset/store',[FixedassetController::class,'Store'])->name('Asset.store');

Route::get('/Admin',[AdminController::class,'Admin'])->name('Manager.list');
Route::get('/Admin/add',[AdminController::Class,'Create'])->name('Manager.create');
Route::post('/Admin/store',[AdminController::Class,'Store'])->name('Admin.store');

Route::get('/Purchase',[PurchaseController::class,'Purchase'])->name('Purchase.list');
Route::get('/Purchase/add',[PurchaseController::Class,'Create'])->name('Purchase.create');
Route::post('/Purchase/store',[PurchaseController::Class,'Store'])->name('Purchase.store');

Route::get('/Allocation/create',[AllocationController::class,'Allocation'])->name('Allocation.list');
Route::get('/Allocation',[AllocationController::Class,'Create'])->name('Allocation.create');
Route::post('/Allocation/Store',[AllocationController::Class,'Store'])->name('Allocation.Store');

Route::get('/Stock/create',[StockController::class,'create'])->name('Stock.Create');
Route::get('/stock/list',[StockController::class,'Stock'])->name('Stock.list');
Route::post('/Stock/store',[StockController::class,'Store'])->name('stock.store');


Route::get('/Repair/create',[RepairController::class,'Create'])->name('Repair.create');
Route::get('/Repair/add',[RepairController::class,'Repair'])->name('Repair.list');
Route::post('/Repair/post',[RepairController::class,'Store'])->name('Repair.store');