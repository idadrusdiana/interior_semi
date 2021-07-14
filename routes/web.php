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

Route::get('/dashboard', function () {
    if (session('berhasil_login')) {
        return view('welcome');
    } else {
        return redirect('/');
    }
});

Route::get('/', 'otentikasi\OtentikasiController@index')->name('login1');
Route::post('/login', 'otentikasi\OtentikasiController@login')->name('login');


Route::group(['middleware'=>'CekLoginMiddleware'], function(){
    Route::get('/index', 'PublicController@index');
    Route::post('/store', 'PublicController@store');

    Route::get('/home', 'AdminController@home');
    Route::get('/user', 'UserController@index');
    Route::get('/user/tambah', 'UserController@tambah');
    Route::post('user/store', 'UserController@store');

    Route::get('user/store', 'UserController@store');
    Route::get('/add-transaksi/{id}', 'UserController@addTransaksi');

    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('/user/update/{id}', 'UserController@update');
    Route::get('/user/hapus/{id}', 'UserController@destroy');
    Route::get('/barang', 'BarangController@index');
    Route::get('/barang/tambah', 'BarangController@tambah');
    Route::post('/barang/store', 'BarangController@store');
    Route::get('/barang/edit/{id}', 'BarangController@edit');
    Route::post('/barang/update/{id}', 'BarangController@update');
    Route::get('/transaksi', 'AdminController@transaksi');
    Route::get('/barang/hapus/{id}', 'BarangController@destroy');
    Route::get('/logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});



