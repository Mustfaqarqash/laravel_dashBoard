<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});
Route::get('/one', function () {
    return view('contentOne');
});
Route::get('/two', function () {
    return view('contentTwo');
});
Route::get('/three', function () {
    return view('contentThree');
});
