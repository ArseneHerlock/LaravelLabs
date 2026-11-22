<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [UserController::class, 'index']);

Route::get('/user',[UserController::class,'index']);

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('users', AdminUserController::class);
    Route::resource('orders', OrderController::class);
});

Auth::routes([
    'login'    => true,  
    'register' => false, 
    'reset'    => false, 
    'verify'   => false, 
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
