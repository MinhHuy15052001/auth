<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/sign-in',[AuthManager::class,'signIn'] )->name('signIn');
Route::post('/sign-in',[AuthManager::class,'handleSignIn'] )->name('handleSignIn');
Route::get('/sign-up',[AuthManager::class,'signUp'] )->name('signUp');
Route::post('/sign-up',[AuthManager::class,'handleSignUp'] )->name('handleSignUp');
Route::get('/sign-out',[AuthManager::class,'handleSignOut'] )->name('handleSignOut');


Route::resource('students', StudentController::class)->middleware('admin');
Route::resource('students', StudentController::class)->only(['index','show'])->middleware('auth');



