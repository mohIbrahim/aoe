<?php

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

Route::get('/', function () {
	
    if(session()->has('locale') && session('locale') == 'ar')
    	return view('ar.welcome');
    
    return view('welcome');
    	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/en', 'LanguagesController@switchToEnglish')->name('en');
Route::get('/ar', 'LanguagesController@switchToArabic')->name('ar');


