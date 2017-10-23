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

//Route::get('/student/create', 'StudentController@create');
//Route::post('/student', 'StudentController@store');
Route::get('/', 'StudentController@create');
Route::post('/student', 'StudentController@store');

//previous week's code, will delete later
//Route::get('/', 'StudentController@index');
Route::get('/check-results', 'StudentController@checkResults');

Route::get('/env', function () {
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));
});
