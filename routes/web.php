<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [App\Http\Controllers\Frontend\frontController::class, 'index'])->name('home');
    Route::get('/company', [App\Http\Controllers\Frontend\frontController::class, 'company'])->name('company');
    Route::get('/policy', [App\Http\Controllers\Frontend\frontController::class, 'policy'])->name('policy');
    Route::any('/form', [App\Http\Controllers\Frontend\frontController::class, 'form'])->name('form');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
});

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
