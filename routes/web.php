<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\homeController;

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


Route::get('/login', [AuthManager::class, 'login'])->name('login');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class,'register'])->name('register');

Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/logout', [AuthManager::class,'logout'])->name('logout');

route::get('welcome',[homeController::class,'index'])->name('home');


//---------------------------------------------------------------------------------
//---------------admin
route::get('admin/Dasboard',[homeController::class,'dashboard'])->name('dashboard');

route::get('admin/product',[homeController::class,'product'])->name('product');

route::get('admin/product1',[homeController::class,'product1'])->name('product1');

route::Post('admin/uploadbestseller',[homeController::class,'uploadbestseller'])->name('uploadbestseller');

route::Post('admin/uploadnewarrival',[homeController::class,'uploadnewarrival'])->name('uploadnewarrival');


