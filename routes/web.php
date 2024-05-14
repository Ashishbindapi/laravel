<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;


Route::get('/upload', function(){
    return view('upload');
});

Route::post('/upload', [UploadController::class, 'upload']);


// Route::get('/get-all-session', function(){
//     $session = session()->all();
//     p($session);
// });

// Route::get('/set-session', function(Request $request) {
//     $request->session()->put('user_name', 'Ashish Kumar');
//     $request->session()->put('user_id', '123');
//     // $request->session()->flash('status', 'Success');
//     return redirect('get-all-session');
// });

// Route::get('/destroy-session', function() {
//     session()->forget(['user_name', 'user_id']);
//     return redirect('get-all-session');
// });
