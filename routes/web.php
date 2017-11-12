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
	Route::get('/products/monochrome/2025ppm', 'ProductsController@getMonochrome2025')->name('Monochrome_2025_PPM');
	Route::get('/products/monochrome/2630ppm', 'ProductsController@getMonochrome2630')->name('Monochrome_2630_PPM');
	Route::get('/products/monochrome/3140ppm', 'ProductsController@getMonochrome3140')->name('Monochrome_3140_PPM');
	Route::get('/products/monochrome/41plus', 'ProductsController@getMonochrome41Plus')->name('Monochrome_41_plus_PPM');

    Route::get('/products/multicolor/2025ppm', 'ProductsController@getMulticolor2025')->name('Multicolor_2025_PPM');
	Route::get('/products/multicolor/2630ppm', 'ProductsController@getMulticolor2630')->name('Multicolor_2630_PPM');
	Route::get('/products/multicolor/3140ppm', 'ProductsController@getMulticolor3140')->name('Multicolor_3140_PPM');
	Route::get('/products/multicolor/41plus', 'ProductsController@getMulticolor41Plus')->name('Multicolor_41_plus_PPM');

	Route::get('/products/lineup', 'ProductsController@getProductLineup')->name('lineup');
	Route::get('/products/HV_Production_MFP', 'ProductsController@getHvProductionMfp')->name('HV_Production_MFP');
//Solutions
	Route::get('solutions', 'SolutionsController@getSolutions')->name('solutions');
//Parts And Maintenance
	Route::get('/parts_and_maintenance', 'PartsAndMaintenanceController@getPartsAndMaintenance')->name('parts_and_maintenance');
    Route::get('/parts_and_maintenance/take_order', 'PartsAndMaintenanceController@takeOrder')->name('parts_and_maintenance.take_order');
	Route::post('/parts_and_maintenance/confirm_the_order', 'PartsAndMaintenanceController@confirmTheOrder')->name('parts_and_maintenance.confirm_the_order');
//Contact Us
	Route::get('contact_us', 'ContactUsController@getContactUs')->name('contact_us');
	Route::post('contact_us_sent_email', 'ContactUsController@sendAnEmail');
