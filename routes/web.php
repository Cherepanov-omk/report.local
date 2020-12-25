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




Auth::routes();

Route::match(['get', 'post'], '/', 'StartController@index')->name('start');

Route::match(['get', 'post'], '/index', 'CalcController@index')->name('index')->middleware('auth');

Route::resource('reports', 'ReportController'::class);
if (Auth::check()) {
    Route::resource('profile', 'ProfileController'::class);
}
