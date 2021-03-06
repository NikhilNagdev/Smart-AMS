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
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/officer', function () {
    return view('officer.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/add-attendance', function () {
    return view('officer.add-attendance');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
