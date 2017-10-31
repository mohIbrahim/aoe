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
    	
})->name('welcome');

Auth::routes();
//Home Login
	Route::get('/home', 'HomeController@index')->name('home');
//Switch Between English And Arabic
	Route::get('/en', 'LanguagesController@switchToEnglish')->name('en');
	Route::get('/ar', 'LanguagesController@switchToArabic')->name('ar');
//products
	Route::get('/products/lineup', 'ProductsController@getProductLineup')->name('lineup');
	Route::get('/products/23ppm', 'ProductsController@get23Ppm')->name('23ppm');
	Route::get('/products/20ppm', 'ProductsController@get20Ppm')->name('20ppm');
	Route::get('/products/HV_Production_MFP', 'ProductsController@getHvProductionMfp')->name('HV_Production_MFP');
//Solutions
	Route::get('solutions', 'SolutionsController@getSolutions')->name('solutions');
//Parts And Maintenance
	Route::get('parts_and_maintenance', 'PartsAndMaintenanceController@getPartsAndMaintenance')->name('parts_and_maintenance');
//Contact Us
	Route::get('contact_us', 'ContactUsController@getContactUs')->name('contact_us');
	Route::post('contact_us_sent_email', 'ContactUsController@sendAnEmail');


