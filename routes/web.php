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

//DocumentViewer Library
Route::any('ViewerJS/{all?}', function(){

    return View::make('ViewerJS.index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('module', 'ModuleController');

Route::resource('training', 'TrainingController');

Route::resource('job-family', 'JobFamilyController');

Route::resource('department', 'DepartmentController');

Route::resource('berita', 'BeritaController');

Route::resource('slider', 'ContentSliderController');

Route::resource('section-training', 'SectionTrainingController');

Route::resource('jawaban', 'JawabanTraineeController');

Route::resource('content-learning', 'ContentLearningController');

Route::get('Trainning', function () {
    return view('IModul');
});


Route::get('Modul', function () {
    return view('module');
});

Route::get('Pre-Test', function () {
    return view('PreTest');
});

Route::get('Personnel', function () {
    return view('Admin.personnelList');
});


Route::get('Tests', function () {
    return view('Quiz');
});


Route::get('AdminHome', function () {
    return view('Admin.Dashboard');
});

Route::get('/CreateDepartement', function () {
    return view('Admin.CreateDept');
});

Route::get('ct', function () {
    return view('create-training');
});

Route::get('Materi', function () {
    return view('Materi');
});



