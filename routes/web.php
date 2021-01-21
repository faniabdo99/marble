<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('index');
})->name('b2b');
Route::get('/b2c' , function(){
    return view('slides');
})->name('b2c');
