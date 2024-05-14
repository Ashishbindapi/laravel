<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;

Route::get('/', function(){
    return view('index');
});


Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/customer', [CustomerController::class, 'index'])->name('customer-popup');
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer-delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer-edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer-update');
Route::get('/customer/view', [CustomerController::class, 'view'])->name('customer-view');
