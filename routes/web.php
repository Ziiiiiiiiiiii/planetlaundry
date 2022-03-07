<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
// Customer
Route::get('customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers');
Route::get('customers/{id}', [App\Http\Controllers\CustomerController::class, 'customer']);
Route::get('customers/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('customers/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('storecustomer');
Route::get('customers/delete/{id}', [App\Http\Controllers\CustomerController::class, 'delete']);

// Transaction
Route::get('transactions/add', [App\Http\Controllers\TransactionController::class, 'create'])->name('addtransactions');
Route::get('transaction/edit/{id}', [App\Http\Controllers\TransactionController::class, 'edit'])->name('edittrans');
Route::post('transaction/store', [App\Http\Controllers\TransactionController::class, 'store'])->name('storetrans');

// Outlet
Route::get('outlets', [App\Http\Controllers\OutletController::class, 'index'])->name('outlets');
Route::get('outlets/edit/{id}', [App\Http\Controllers\OutletController::class, 'edit']);
Route::post('outlets/store', [App\Http\Controllers\OutletController::class, 'store'])->name('storeoutlet');
Route::post('outlets/update/{id}', [App\Http\Controllers\OutletController::class, 'update'])->name('updateoutlet');
Route::get('outlets/{id}', [App\Http\Controllers\OutletController::class, 'outlet']);
Route::get('outlets/delete/{id}', [App\Http\Controllers\OutletController::class, 'delete']);

// User
Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edituser');
Route::post('users/store', [App\Http\Controllers\UserController::class, 'store'])->name('storeuser');
Route::get('users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('deleteuser');

// Packages
Route::get('packages', [App\Http\Controllers\PackageController::class, 'index'])->name('packages');
Route::get('packages/edit/{id}', [App\Http\Controllers\PackageController::class, 'edit']);
Route::post('packages/store', [App\Http\Controllers\PackageController::class, 'store'])->name('storepackage');
Route::get('packages/delete/{id}', [App\Http\Controllers\PackageController::class, 'delete']);