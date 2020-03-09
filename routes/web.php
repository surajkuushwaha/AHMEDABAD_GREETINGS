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
Route::group(['middleware' =>['auth','admin']],function(){
    
    Route::get('admin','AdminController@index');
    Route::get('admin/user','AdminController@user');
    Route::post('admin/user/edituser','AdminController@edituser');
    Route::post('updateuser','AdminController@updateuser');
    Route::post('finaledit','AdminController@finaledit');
    Route::post('admin/user/deleteuse','AdminController@deleteuse');




    Route::get('admin/product','AdminController@Product');
    Route::post('admin/product/delete','AdminController@DeleteProduct');
    Route::post('admin/product/add','AdminController@productAdd');
    Route::post('admin/product/editproduct','AdminController@editproduct');
    Route::post('finaleditproduct','AdminController@finaleditproduct');





    Route::get('admin/Address','AdminController@Address');
    Route::post('admin/Address/ADDAddress','AdminController@ADDAddress');
    Route::post('admin/Address/delete','AdminController@DeleteAddress');
    Route::post('admin/Address/edit','AdminController@editAddress');
    Route::post('admin/Address/finaledit','AdminController@finaleditAddress');
    // Route::view('tempp','Admin.Editaddress');


    Route::get('admin/Manager','AdminController@Manager');
    Route::post('admin/Manager/add','AdminController@Manageradd');
    Route::post('admin/Manager/delete','AdminController@Managerdelete');
    });
//////////////////////////////////////////////////////////////////

Route::group(['middleware' =>['auth','manager']],function(){

    Route::get('manager','ManagerController@index');
    Route::post('manager/ADDAddress','ManagerController@ADDAddress');
    Route::get('manager/profile','ManagerController@profile');
    Route::post('manager/profile/editprofile','ManagerController@editprofile');
    Route::post('manager/profile/uploadimage','ManagerController@uploadimage');

});

Route::view('welcome','Home.home');













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