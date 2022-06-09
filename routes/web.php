<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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

/*Route::get('/product/{id}', function ($id) {
    return Product::find($id);
    });*/

    Route::get('/usuari/{email}', );    

Route::get('/', function () {
    return view('login');
});

Route::get('/saluda/{nom}', [UserController::class, 'prova']);

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/home', [ProductController::class, 'showProducts'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'detailProduct']);

Route::get('/shop', function(){
    return response()->view('shop')->header("Refresh", "5;url=/home");
});

