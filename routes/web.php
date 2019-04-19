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
    return response()->json(['message' => 'Pixel Kairos API', 'status' => 'Connected']);;
});

Route::resource('courses', 'CoursesController');
Route::resource('users', 'UsersController');


Route::get('/painel', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
