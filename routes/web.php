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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home','DumpController@index');

Route::get('/registerPT', 'DumpController@regPT');
Route::get('/registerTP', 'DumpController@regTP');


Route::group(['middleware' => ['auth']], function() {

	Route::get('/profile', 'ProfileController@index')->name('profile');

});

Route::get('/home/{id}', 'DumpController@tuisyenDetail');
