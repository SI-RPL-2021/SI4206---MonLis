<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\dashboard::class, 'home'])->name('dashboard-home');
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'history'])->name('history');
Route::get('/profile', [App\Http\Controllers\dashboard::class, 'profile'])->name('profile');
Route::get('/tools', [App\Http\Controllers\dashboard::class, 'tools'])->name('tools');
Route::get('/security', [App\Http\Controllers\dashboard::class, 'security'])->name('security');
