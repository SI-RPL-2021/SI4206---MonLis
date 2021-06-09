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
Route::get('/addtools', [App\Http\Controllers\DeviceController::class, 'addtools'])->name('addtools');
Route::post('/addtoolsdata', [App\Http\Controllers\DeviceController::class, 'addToolsData'])->name('addToolsData');
Route::post('/delete', [App\Http\Controllers\DeviceController::class, 'deleteTools'])->name('deleteTools');
Route::get('/editTools/{id}', [App\Http\Controllers\DeviceController::class, 'edittools'])->name('editTools');
Route::post('/editToolsdata/{id}', [App\Http\Controllers\DeviceController::class, 'editToolsData'])->name('editToolsData');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'home'])->name('dashboard-admin');
Route::get('/listuser', [App\Http\Controllers\AdminController::class, 'listuser'])->name('listuser');
Route::get('/listdevice', [App\Http\Controllers\AdminController::class, 'listdevice'])->name('listdevice');

Route::get('/listuser/{id}/devices', [App\Http\Controllers\AdminController::class, 'userdevice'])->name('userdevice');

