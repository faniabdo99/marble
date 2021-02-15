<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('contact-us' , 'SheetsController@postContactUs')->name('contact.post');