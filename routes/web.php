<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/users', [UserController::class, 'index'])->name('users');

// ROUTE ORDERS
route::group([], function(){
    route::get('/orders', [OrderController::class, 'index'])->name('orders');
    route::get('/create-orders', [OrderController::class, 'create'])->name('create-order');
    Route::post('/save-orden', [OrderController::class, 'store'])->name('save-order');
    route::get('/edit-order/{id}', [OrderController::class, 'edit'])->name('edit-order');
    route::patch('/save-changes/{id}', [OrderController::class, 'update'])->name('update-order');
    route::delete('/destroy/{id}', [OrderController::class, 'destroy'])->name('delete-order');
});

// RUTAS ORDERS - DETAILS
Route::group([], function(){
    route::get('/details-orders', [OrderDetailsController::class, 'index'])->name('orders-details');
    route::get('/crate-details', [OrderDetailsController::class, 'create'])->name('create-details');
    route::post('/save-details', [OrderDetailsController::class, 'store'])->name('save-details');
    route::get('/edit-details/{id}', [OrderDetailsController::class, 'edit'])->name('edit-details');
    route::patch('/update-details/{id}', [OrderDetailsController::class, 'update'])->name('update-details');
    route::delete('/destroy-details/{id}', [OrderDetailsController::class, 'destroy'])->name('destroy-details');
});

// RUTAS DEL PAQUETE PDF MERGER
Route::get('merge-pdf', [PDFController::class, 'index'])->name('pdf');
Route::post('merge-pdf', [PDFController::class, 'store'])->name('merge.pdf.post');

route::post('/save-pdf', [PDFController::class, 'save'])->name('save');