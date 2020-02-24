<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------l
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/////////////////////////////////ADMIN////////////////////////////
Route::get('admin','AdminController@index');
Route::get('admin/user','AdminController@user');
Route::post('edituser','AdminController@edituser');
Route::post('updateuser','AdminController@updateuser');
Route::post('finaledit','AdminController@finaledit');
Route::get('admin/product','AdminController@Product');
Route::get('admin/Address','AdminController@Address');

//////////////////////////////////////////////////////////////////



















Route::view('form','upload');
// Route::view('update1','upload');
Route::post('insert','tempcontroller@insert');
Route::get('update','tempcontroller@update');
Route::post('update1','tempcontroller@update1');




Route::get('db','tempcontroller@datab');
Route::get('batabase','tempcontroller@database');

Route::get('dbb','tempcontroller@model1');
Route::post('upload','tempcontroller@upload');
Route::view('form','upload');




Route::get('/temp','basecontroller@index');
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






Route::get('/home1','tempcontroller@index');
Route::get('/home2','tempcontroller@index1');//temp

Route::post('/dbs','tempcontroller@up')->name('upload');//temp