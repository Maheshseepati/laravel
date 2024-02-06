<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/hello_world/{id}',[Controller::class,'index'])->name('hey');
// Route::get('/', function(){
// $user = DB::select("select * from cars");
// dd($user);
// });
// Route::get('/web',[Controller::class,'hello'])->name('contact');
Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/product{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product{product}/update',[ProductController::class,'update'])->name('product.update');
Route::delete('/product{product}/delete',[ProductController::class,'delete'])->name('product.delete');