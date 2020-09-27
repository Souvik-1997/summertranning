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

Route::get('/online', function () {
    return view('online');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/online', 'HomeController@online')->name('online');
// Route::get('/student-login', 'StudentController@index')->name('student.login');
// Route::post('/after-login', 'StudentController@store')->name('after.login');
// Route::post('/student-after', 'StudentController@afterlogin')->name('student.after');

Route::resource('student','StudentController');
Route::post('student.studentAfter','StudentController@show');

Route::resource('admin','AdminController');
Route::resource('exam','ExamController');
Route::resource('attempt','AttemptsExamController');
// Route::get('/attempt', 'ExamAttemptController@attempt');
Route::get('attempt/show_result/{id}', 'AttemptsExamController@show_result');
Route::get('/about', 'SiteDetailsController@about');
Route::get('/online', 'SiteDetailsController@online');
Route::get('/contact', 'SiteDetailsController@contact');

