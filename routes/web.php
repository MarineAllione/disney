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
Route::get('/histoiretest', function () {
    return view('histoiretest');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/texte', function () {
    return view('texte');
});

Route::get('/films', function () {
    return view('films');
});

Route::get('/jeux', function () {
    return view('jeux');
});

Route::get('/jeux1', function () {
    return view('jeux1');
});

Route::get('/jeux2', function () {
    return view('jeux2');
});
Route::get('/jeux3', function () {
    return view('jeux3');
});


Route::get('/histoires','histoiresController@index');
Route::get('/histoires/{n}','histoiresController@show');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
