<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\productController ;
use \App\Models\product;

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

Route::get('/products' , [productController::class,'index'])->name("Shop.index");
Route::get('/products/creat' , [productController::class,'creat'])->name("Shop.creat");
Route::post('/products' , [productController::class,'store'])->name("Shop.store");




Route::get('/', function () {
  $Products= product::all();
      return view('index' , [ 'product'=> $Products , 'type'=> 'home' ]);
  })->name("home.index");

  Route::get('/single_product', function () {
    $Products= product::all();
    return view('single_product' , [ 'product'=> $Products , 'type'=> 'shop']);

});

Route::get('/contact', function () {
      return view('contact' , [  'type'=> 'contact']);
  })->name("contact");









  Route::get('/creat_product', function () {

      return view('product_CRUD/creat_product');
  });



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
