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
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'Super Admin','middleware'=>['auth','role:Super Admin']],
function(){

		Route::resource('disposisi','DisposisiController');
		Route::resource('sm','SuratmasukController');
		Route::resource('sk','SuratKeluarController');
		Route::resource('instansi','InstansiController');
		Route::resource('user','UserController');

});




