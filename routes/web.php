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

Route::resource('module', 'ModuleController');

Route::resource('training', 'TrainingController');

Route::resource('job-family', 'JobFamilyController');

Route::resource('department', 'DepartmentController');

Route::get('homeNotLogin', function () {
    return view('homebefore');
});


Route::get('HomeLogin', function () {
    return view('homeLoggedIn');
});

Route::get('Trainning', function () {
    return view('IModul');
});


Route::get('ForumNotLogin', function () {
    return view('forumUmumNotLogin');
});


Route::get('Pre-Test', function () {
    return view('PreTest');
});