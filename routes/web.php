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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@welcome')->name('welcome');

Route::get('/delivery', 'HomeController@delivery')->name('delivery');

Route::get('/contact-us', 'HomeController@contact')->name('contact');

Route::post('/find', 'HomeController@find')->name('find');

Route::get('/service', 'HomeController@services')->name('service');

Route::get('/about-us', 'HomeController@about')->name('about');
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('{path}','HomeController@index')->where('path', '[A-Za-z]+');
