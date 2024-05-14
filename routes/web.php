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
Route::get('/customer/view', [CustomerController::class, 'view'])->name('customer-view');
