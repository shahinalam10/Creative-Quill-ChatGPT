<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GptController;
use App\Http\Controllers\AuthenticController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login-user',[HomeController::class,'loginUser'])->name('login-user');
Route::get('/registration',[HomeController::class,'regisTration'])->name('registration');
Route::get('/prompt-me',[HomeController::class,'promptMe'])->name('prompt-me');

Route::get('/creative-quill',[GptController::class,'creativeQuill'])->name('creative-quill');


