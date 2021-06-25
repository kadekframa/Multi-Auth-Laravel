<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function(){
	return view('client.login');
})->name('login');

Route::get('/keluar', 'LoginController@logout')->name('logout');


	Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');


// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
// 	Route::get('/beranda', 'BerandaController@index');
// 	Route::get('/halaman1', 'BerandaController@halaman1');
// 	Route::get('/halaman2', 'BerandaController@halaman2');

// });

Route::group(['middleware' => ['auth:user,client', 'ceklevel:admin,user']], function(){
	Route::get('/beranda', 'BerandaController@index');
	Route::get('/halaman2', 'BerandaController@halaman2');

});

