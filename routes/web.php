<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

Route::get('/data', [IndexController::class, 'index']);
Route::get('/group', [IndexController::class, 'group']);


Route::get('/', function(){
    return view('index');
});


Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

//----- GroupBy /customer
Route::group(['prefix' => '/customer'], function(){
    Route::get('create', [CustomerController::class, 'index'])->name('customer-popup');
    Route::post('create', [CustomerController::class, 'store']);
    Route::get('delete/{id}', [CustomerController::class, 'goTrash'])->name('customer-delete');
    Route::get('force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('customer-force-delete');
    Route::get('restore/{id}', [CustomerController::class, 'restore'])->name('customer-restore');
    Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer-edit');
    Route::post('update/{id}', [CustomerController::class, 'update'])->name('customer-update');
    Route::get('view', [CustomerController::class, 'view'])->name('customer-view');
    Route::get('trash', [CustomerController::class, 'trash'])->name('customer-trash');
});
Route::get('/get-all-session', function(){
    $session = session()->all();
    p($session);
});

Route::get('/set-session', function(Request $request) {
    $request->session()->put('user_name', 'Ashish Kumar');
    $request->session()->put('user_id', '123');
    // $request->session()->flash('status', 'Success');
    return redirect('get-all-session');
});

Route::get('/destroy-session', function() {
    session()->forget(['user_name', 'user_id']);
    return redirect('get-all-session');
});
