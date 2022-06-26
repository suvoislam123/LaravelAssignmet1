<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PublicAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(PublicController::class)->group(function(){
    Route::get('/home','home')->name('homepage');   
    Route::get('/product','product')->name('productpage');   
    Route::get('/computer','computer')->name('computerpage');   
    Route::get('/checkout','checkout')->name('checkout');   
}
);
Route::controller(AdminController::class)->prefix('admin')->group(function(){
    Route::get('/dashboard','dashboard')->name('admin.dashboard');   
    Route::get('/product','product')->name('admin.product');   
    Route::get('/createproduct','createproduct')->name('admin.createproduct');   
}
);

Route::controller(AdminAuthController::class)->prefix('admin')->group(function(){
    Route::get('/login','login')->name('admin.login');
    Route::get('/register','register')->name('admin.register');  
}
);
