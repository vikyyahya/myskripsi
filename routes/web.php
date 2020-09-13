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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


//design interior
Route::get('/design-interior', 'DesignInteriorController@index');
Route::get('/design-interior/detail/{id}', 'DesignInteriorController@detail');
Route::post('/design-interior/pembayaran/{id}', 'DesignInteriorController@pembayaran');

//design exterior
Route::get('/design-exterior', 'DesignExteriorController@index');

//design exterior
Route::get('/design-logo', 'DesignLogoController@index');

//Produk
Route::get('/produk', 'ProdukController@index');
Route::get('/addproduk', 'ProdukController@tambahproduk');
Route::post('/createproduk', 'ProdukController@create');
Route::post('/updateproduk/{id}', 'ProdukController@update');
Route::get('/ubahproduk/{id}', 'ProdukController@tampilubah');
Route::get('/hapusproduk/{id}', 'ProdukController@delete');

//user
Route::get('/users', 'UserController@user');
Route::get('/adduser', 'UserController@adduser');
Route::get('/edituser/{id}', 'UserController@edituser');
Route::post('/createuser', 'UserController@create');
Route::post('/upadateuser/{id}', 'UserController@update');
Route::get('/user/{id}/delete', 'UserController@delete');
Route::get('/users/cari', 'UserController@cari');

//Pesan
Route::get('/pesan', 'PesanController@index');
