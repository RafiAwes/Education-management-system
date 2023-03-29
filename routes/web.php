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

//upload page
Route::get('/upload/data','uploadData@uploadData');
Route::post('insert/department','uploadData@uploadDep');
Route::post('upload/course','uploadData@uploadCourse');
Route::post('insert/section','uploadData@uploadSec');
Route::get('/dropdown/{id}','uploadData@divisionDropDown');
Route::post('upload/school','uploadData@uploadSchool');

//student page
Route::get('/upload/new/student','studentController@uploadStudentPage');
Route::post('admit/student','studentController@admitStudent');
Route::get('/show/student/list','studentController@studentList');

//list page
Route::get('/show/department','listController@departmentList');
Route::get('show/courses/of/this/department/{id}','listController@courseList');
