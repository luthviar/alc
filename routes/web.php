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

Route::resource('struktur', 'StrukturOrganisasiController');

Route::resource('job-family', 'JobFamilyController');

Route::resource('department', 'DepartmentController');

Route::resource('berita', 'BeritaController');

Route::resource('slider', 'ContentSliderController');

Route::resource('section-training', 'SectionTrainingController');

Route::resource('jawaban', 'JawabanTraineeController');

Route::resource('personnel', 'PersonnelController');

Route::resource('raport', 'ScoreSummaryController');

Route::resource('test', 'TestController');

Route::resource('question', 'QuestionController');

Route::post('personnel/submit', 'PersonnelController@update');

Route::post('slider/submit', 'ContentSliderController@update');

Route::post('berita/submit', 'BeritaController@update');

Route::post('question/submit', 'QuestionController@update');

Route::post('raport/submit/{id}', 'ScoreSummaryController@store');

Route::resource('news-reply', 'NewsReplieController');

Route::resource('forum-reply', 'ReplieController');

Route::resource('access', 'UserTrainingAuthController');

Route::get('/slider/{id}/active', 'ContentSliderController@active');

Route::get('/slider/{id}/nonactive', 'ContentSliderController@nonactive');

Route::get('/access/{id}/active', 'UserTrainingAuthController@active');

Route::get('/access/{id}/nonactive', 'UserTrainingAuthController@nonactive');

Route::get('/berita/{id}/active', 'BeritaController@active');

Route::get('/berita/{id}/nonactive', 'BeritaController@nonactive');

Route::get('/content-learning/{id}', 'ContentLearningController@add_content_learning');

Route::post('/content-learning/submit', 'ContentLearningController@store');

Route::post('/training/update', 'TrainingController@update');

Route::get('/get-content-learning/{id}', 'ContentLearningController@get_content_learning');

Route::get('/add-post-test/{id}', 'TrainingController@add_post_test');

Route::post('/post-test/submit', 'TestController@store_post_test');

Route::get('news-board', 'BeritaController@readMore');

Route::get('/request-access/{id_training}', 'UserTrainingAuthController@request_access');

Route::get('/training/publish/{id}','TrainingController@publish');

Route::get('/training/deactive/{id}','TrainingController@deactive');

Route::get('/training/view/{id}','TrainingController@view');

Route::get('/question/delete/{id}','QuestionController@destroy');

Route::get('/content-learning/delete/{id}','ContentLearningController@destroy');

Route::post('/change-time','TestController@change_time');

Route::post('/content-learning/add-content','ContentLearningController@add_content');

Route::post('/question/submit','QuestionController@submit');

Route::post('/get-unit','StrukturOrganisasiController@get_unit');

Route::post('/get-department','StrukturOrganisasiController@get_department');

Route::post('/get-section','StrukturOrganisasiController@get_section');

Route::get('/forum/list', 'ForumController@list_forum');

Route::post('/get-forum', 'ForumController@get_forum');

Route::post('/delete-forum', 'ForumController@delete_forum');

Route::get('Trainning', function () {
    return view('IModul');
});


Route::get('Modul', function () {
    return view('module');
});

Route::get('Pre-Test', function () {
    return view('PreTest');
});

Route::get('EditPreTest', function () {
    return view('Admin.EditPreTest');
});

Route::resource('content-learning', 'ContentLearningController');



Route::get('UserList', function () {
    return view('Admin(new).UserList');
});


Route::get('Employee', function () {
    return view('Admin.EmployeeList');
});


Route::get('Tests', function () {
    return view('Quiz');
});




Route::get('/CreateDepartement', function () {
    return view('Admin.CreateDept');
});

Route::get('Materi', function () {
    return view('Materi');
});

Route::get('AddUser', function () {
    return view('Admin.AddUser');
});

Route::get('UserInfo', function () {
    return view('Admin.UserInfo');
});

Route::get('TrainningInfo', function () {
    return view('Admin.TrainningInfo');
});


Route::get('CreateTrainning', function () {
    return view('Admin.CreateTrainning2');
});

Route::get('EditProfile', function () {
    return view('Admin.EditProfile');
});

Route::get('UserList', function () {
    return view('Admin.UserList');
});

Route::get('CreateNews', function () {
    return view('Admin.CreateNews');
});

Route::get('ListTrainning', function () {
    return view('Admin.ListTrainning');
});


Route::get('lol', function () {
    return view('Admin.Template');
});


Route::get('QuestionList', function () {
    return view('Admin1.QuestionList');
});

Route::get('CreatePreTest', function () {
    return view('Admin.CreatePreTest');
});

Route::get('CreateTrainningMateri', function () {
    return view('Admin.CreateTrainningMateri');
});

Route::get('AddMateri', function () {
    return view('Admin.AddMateri');
});

Route::get('Upload', function () {
    return view('Admin.UploadImage');
});

Route::get('CreateTrainning2', function () {
    return view('Admin.CreateTrainning2');
});

Route::get('404', function () {
    return view('404');
});

Route::get('NewsBoard', function () {
    return view('newsboard');
});

Route::resource('forum', 'ForumController');


Route::get('RequestBoard', function () {
    return view('Admin.RequestBoard');
});

Route::get('ResetPassword', function () {
    return view('ResetPassword');
});


Route::get('RequestPasswordForm', function () {
    return view('RequestPasswordForm');
});