<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\usercontroller;

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
    return view('home.homepage');
});

Route::any('/admindashboard', [AdminController::class, 'index'])->name('admindashboard');
Route::any('/adminlogin', [AdminController::class, 'adminloginview'])->name('adminlogin');
Route::any('/dologin', [AdminController::class, 'dologin']);
Route::any('/category', [AdminController::class, 'category'])->name('category');



Route::any('/userlogin', [usercontroller::class, 'index']);
Route::any('/Register', [usercontroller::class, 'Register']);


