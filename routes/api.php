<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('contact-us' , 'SheetsController@postContactUs')->name('contact.post');
Route::post('newsletter' , 'SheetsController@postNewsletter')->name('newsletter.post');