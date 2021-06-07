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

Route::get('/','homepageController@index')->name('homepage');
Route::get('/contactus','homepageController@contact')->name('contact');
Route::post('/contactus','homepageController@contactpost')->name('contactpost');
