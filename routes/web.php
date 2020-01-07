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


Route::get('/', 'LanguagesController@List');

Route::get('/home', 'HomeController@index');

Route::get('/about', 'AboutController@index');


Route::group(['middleware' =>'webApp'],function(){
	 Route::get('/register',function(){
	 return view('Login.login');
});
});


// Route::get('/register',function(){
// 	return view('Login.login');
// })->middleware('Checkstatus');

Route::post('/register','LanguagesController@index');

Route::view('/contact','contact');
