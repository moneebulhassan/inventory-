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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


    Route::resource('clients',\App\Http\Controllers\Api\ClientController::class);
    Route::resource('products',\App\Http\Controllers\Api\ProductController::class);
    Route::resource('configs',\App\Http\Controllers\Api\ConfigController::class);
    Route::resource('proformas',\App\Http\Controllers\Api\ProformaController::class);
    Route::resource('invoices',\App\Http\Controllers\Api\InvoiceController::class);
    Route::resource('contracts',\App\Http\Controllers\Api\ContractController::class);
    Route::resource('receipts',\App\Http\Controllers\Api\ReceiptController::class);
});
