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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::post('updateBatch/{id}', 'StudentController@updateBatch');

Route::resource('students', 'StudentController');
Route::resource('batch', 'BatchController');

Route::get('report/create/{student_id}', "ReportController@create")->name('report.build');
Route::post('report/{student_id}', "ReportController@store");

Route::resource('report', 'ReportController', [
	'except' => [
		'create', 'store'
	]
]);

Route::get('/home', 'HomeController@index');

Route::get('/', function() {
    return redirect('home');
});
