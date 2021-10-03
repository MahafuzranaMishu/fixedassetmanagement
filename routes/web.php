<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\EmployeController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\FixedassetController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\backend\SupplierController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\backend\AllocationController;
use App\Http\Controllers\backend\RepairController;
use App\Http\Controllers\frontend\HomeController as FrontendHome;
use App\Http\Controllers\frontend\UserloginController;
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



Route::get('/',[FrontendHome::class,'home'])->name('home');
Route::get('/about',[FrontendHome::class,'about'])->name('about.home');



//Route::post('/user/login/post',[UserloginController::class,'dologin'])->name('Users.do.login');
//Route::get('/user/home',[UserloginController::class,'home'])->name('User.home');



Route::get('/Admin/login',[UserController::class,'login'])->name('Admin.login');
Route::post('/Admin/login/post',[UserController::class,'loginpost'])->name('Admin.login.post');


Route::group(['prefix'=>'Admin','middleware'=>'auth'],function(){

  /*  Route::get('/test',function (){
        return view('backend.layouts.dash');
    });*/
    Route::get('/',[HomeController::class,'home'])->name('home.start');
    Route::get('/contact',[HomeController::Class,'contact']);
    
    Route::get('/User',[UserController::class,'User'])->name('User.list');
    Route::get('/User/delete/{id}',[UserController::class,'delete'])->name('User.delete');
    Route::get('/User/edit/{id}',[UserController::class,'edit'])->name('User.edit');
    Route::put('/User/update/{id}',[UserController::class,'update'])->name('User.update');
    Route::get('/user/assets',[UserController::class,'allasset'])->name('user.asset');
    Route::get('/user/requestassets',[UserController::class,'reqasset'])->name('user.request');
    Route::post('/user/request',[UserController::class,'requestasset'])->name('user.request.asset');
    Route::get('/user/asset/request',[UserController::Class,'pendingrequest'])->name('user.assetreq');
    Route::get('/user/{id}/assets',[UserController::class,'userasset'])->name('own.asset');
    Route::get('/user/{id}/assets',[UserController::class,'userasset'])->name('own.asset');

    Route::get('/Admin',[UserController::class,'Admin'])->name('Admin.list');
    Route::get('/user/create',[UserController::class,'create'])->name('User.create');
    //Route::get('/user/login',[UserController::class,'login'])->name('User.login');
    Route::post('/user/store',[UserController::class,'store',])->name('User.store');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    
    Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/{id}/assets',[CategoryController::class,'allasset'])->name('category.asset');
    
    
    Route::get('/Asset',[FixedassetController::class,'Asset'])->name('Asset.list');
    Route::get('/Asset/add',[FixedassetController::class,'Create'])->name('Asset.create');
    Route::get('/Asset/delete/{id}',[FixedassetController::class,'delete'])->name('Asset.delete');
    Route::get('/Asset/edit/{id}',[FixedassetController::class,'edit'])->name('Asset.edit');
    Route::put('/Asset/update/{id}',[FixedassetController::class,'update'])->name('Asset.update');
    Route::post('/Asset/store',[FixedassetController::class,'Store'])->name('Asset.store');
    
    /*Route::get('/Admin',[AdminController::class,'Admin'])->name('Manager.list');
    Route::get('/Admin/add',[AdminController::Class,'Create'])->name('Manager.create');
    Route::post('/Admin/store',[AdminController::Class,'Store'])->name('Admin.store');*/

    Route::get('/Supplier',[SupplierController::class,'Supplier'])->name('Supplier.list');
    Route::get('/Supplier/add',[SupplierController::Class,'Create'])->name('Supplier.create');
    Route::get('/Supplier/delete/{id}',[SupplierController::Class,'delete'])->name('Supplier.delete');
    Route::get('/Supplier/edit/{id}',[SupplierController::Class,'edit'])->name('Supplier.edit');
    Route::put('/Supplier/update/{id}',[SupplierController::Class,'update'])->name('Supplier.update');
    Route::post('/Supplier/store',[SupplierController::Class,'Store'])->name('Supplier.store');
    Route::get('/Supplier/{id}/assets',[SupplierController::class,'allasset'])->name('supplier.asset');
    
    Route::get('/Purchase',[PurchaseController::class,'Purchase'])->name('Purchase.list');
    Route::get('/Purchase/add',[PurchaseController::Class,'Create'])->name('Purchase.create');
    Route::get('/Purchase/delet/{id}',[PurchaseController::Class,'delete'])->name('Purchase.Delete');
    Route::get('/Purchase/edit/{id}',[PurchaseController::Class,'edit'])->name('Purchase.edit');
    Route::put('/Purchase/update/{id}',[PurchaseController::Class,'update'])->name('Purchase.update');
    Route::post('/Purchase/store',[PurchaseController::Class,'Store'])->name('Purchase.store');
    
    Route::get('/Allocation/create',[AllocationController::class,'Allocation'])->name('Allocation.list');
    Route::get('/Allocation',[AllocationController::Class,'Create'])->name('Allocation.create');
    Route::get('/Allocation/edit/{id}',[AllocationController::Class,'edit'])->name('Allocation.edit');
    Route::put('/Allocation/update/{id}',[AllocationController::Class,'update'])->name('Allocation.update');
    Route::get('/Allocation/update/{id}',[AllocationController::Class,'delete'])->name('Allocation.delete');
    Route::post('/Allocation/Store',[AllocationController::Class,'Store'])->name('Allocation.Store');
    Route::get('/Allocation/request',[AllocationController::Class,'request'])->name('Allocation.request');
    Route::get('/Allocation/stock/request',[AllocationController::Class,'stockrequest'])->name('Allocation.stockrequest');
    Route::get('/Allocation/report',[AllocationController::Class,'report'])->name('Allocation.report');
    Route::get('/Allocation/approve/{id}/{status}',[AllocationController::Class,'approve'])->name('Allocation.approve');


    
    Route::get('/Stock/create',[StockController::class,'create'])->name('Stock.Create');
    Route::get('/stock/list',[StockController::class,'Stock'])->name('Stock.list');
    Route::get('/stock/delete/{id}',[StockController::class,'delete'])->name('Stock.delete');
    Route::get('/stock/edit/{id}',[StockController::class,'edit'])->name('Stock.edit');
    Route::Put('/stock/update/{id}',[StockController::class,'update'])->name('Stock.update');
    Route::post('/Stock/store',[StockController::class,'Store'])->name('stock.store');
    
    
    Route::get('/Repair/create',[RepairController::class,'Create'])->name('Repair.create');
    Route::get('/Repair/add',[RepairController::class,'Repair'])->name('Repair.list');
    Route::get('/Repair/delete/{id}',[RepairController::class,'delete'])->name('Repair.delete');
    Route::get('/Repair/edit/{id}',[RepairController::class,'edit'])->name('Repair.edit');
    Route::put('/Repair/update/{id}',[RepairController::class,'update'])->name('Repair.update');
    Route::post('/Repair/post',[RepairController::class,'Store'])->name('Repair.store');





});




