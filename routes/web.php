<?php

use App\Http\Controllers\signController;
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
})->name('home');
Route::get('/login',[signController::class,'index'])->name('login');
Route::post('/loginuser',[signController::class,'login'])->name('loginuser');
Route::get('/logout',[signController::class,'logout'])->name('logout');
Route::get('/register',[signController::class,'register'])->name('register');
Route::post('/createuser',[signController::class,'createuser'])->name('createuser');


//routes of admin
Route::get('/loginforadmin',[signController::class,'indexadmin'])->name('loginadmin');
Route::post('/loginadmin',[signController::class,'loginadmin'])->name('loginadmin');
//routes
Route::get('/home', function () {
    return view('home');
})->name('index');
Route::get('/homeadmin', function () {
    return view('homeadmin');
})->name('indexadmin');
Route::get('/logoutadmin',[signController::class,'logoutadmin'])->name('logoutadmin');