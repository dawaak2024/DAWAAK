<?php

use App\Http\Controllers\Api\LoginContrller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AuthManager;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\Api\dataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [LoginContrller::class, 'login'])->name('login');

Route::post('/register', [LoginContrller::class, 'register'])->name('register');

Route::get('/logout', [LoginContrller::class,'logout'])->name('logout');

route::get('/bestseller',[dataController::class,'showbestseller'])->name('bestseller');

route::get('/newarrival',[dataController::class,'shownewarrival'])->name('newarrival');

//-------------------------------admin-----------------------------------
route::post('/admin/product',[homeController::class,'uploadbestseller'])->name('bestseller');

route::post('/admin/product1',[homeController::class,'uploadnewarrival'])->name('newarrival');
