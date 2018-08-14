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
    return view('dashboard');
});
Route::get('/login', function() {
return view('auth.login');
});
Route::get('/register', function() {
return view('auth.register');
});
Route::get('/editprofile', function() {
return view('user.editprofile');
});
Route::resource('barang','BarangController');
Route::resource('supplier','SupplierController');
Route::resource('user','UserController');
Route::resource('brand','BrandController');

