<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\WorkerController;

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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


//Administrator
Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/inventory', [AdminController::class, 'inventory'])->name('admin.inventory');
Route::get('/admin/product/add', [AdminController::class, 'addProduct'])->name('admin.addProduct');
Route::get('/admin/promotion', [AdminController::class, 'promotion'])->name('admin.promotion');
Route::get('/admin/report', [AdminController::class, 'report'])->name('admin.report');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');


//Committee
Route::get('/committee', [CommitteeController::class, 'index'])->name('committee.home');


//Worker
Route::get('/worker', [WorkerController::class, 'index'])->name('worker.home');


