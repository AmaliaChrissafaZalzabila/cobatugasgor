<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/views/partials/about', function () {
    return view('partials.about');
});

Route::get('/views/partials/contact', function () {
    return view('partials.contact');
});

Route::get('/views/user/login', [AuthController::class,'index'])->name('login-form');
Route::get('/views/user/login', [AuthController::class,'login'])->name('user.login');
Route::post('/views/user/register', [AuthController::class,'register'])->name('user.register');
