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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/postFormular','FormularController@postFormular');

Route::get('/', function(){
	return view('Forma_Procedure');
});

Route::get('/trifke' ,function() {
	return view('prikaz/prikaz4');
});

Route::get('/danijel' ,function() {
	return view('prikaz/prikaz3');
});

Route::get('/prikaz4_home' ,function() {
	return view('prikaz/prikaz4_home');
});

Route::get('/prikaz4_table' ,function() {
	return view('prikaz/prikaz4_table');
});

Route::get('/prikaz3_table' ,function() {
	return view('prikaz/prikaz3_table');
});

Route::get('/prikaz3_home' ,function() {
	return view('prikaz/prikaz3_home');
});

Route::get('/prikaz3_zaposleni' ,function() {
	return view('prikaz/prikaz3_zaposleni');
});