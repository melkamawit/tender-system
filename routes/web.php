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

//All about tenders
Route::resource('tenders', 'TendersController');


Route::get('/about', function () {
    return view('about');
    
});

Route::get('/tender', function () {
    return view('tender');
    
});

Route::get('/postT','TendersController@create');
Route::get('/cheretas','TendersController@index');
Route::get('/tenders','TendersController@show');
