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

Route::get('/index', function () {
    return view('index');
});
Route::get('/studentLogin', function () {
    return view('studentLogin');
});

Auth::routes();


Route::get('/home', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student-login', 'StudentController@login')->name('student.Login');
// Route::post('/login-handle', 'StudentController@loginHandle')->name('login.handle');
Route::post('/login', 'StudentController@save');
