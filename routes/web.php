<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ram/{name?}', function ($name = null) {
    $demo ='<h1>Ashish Bindra JI</h1>';
    $data = compact('name','demo');
    return view('ram')->with($data);
});
