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


Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');




//-------------TASKS ROUTE------------
Route::get('/tasks', 'PostsController@tasks');

//-------------first task------------
Route::get('/task-1', 'PostsController@task1');

//-------------second task------------
Route::get('/task-2', 'PostsController@task2');

//-------------third task------------
Route::get('/task-3', 'PostsController@task3');

//-------------fourth task------------
Route::get('/task-4', 'PostsController@task4');

//-------------fifth task------------
Route::get('/task-5', 'PostsController@task5');

//-------------sixth task------------
Route::get('/task-6', 'PostsController@task6');

//-------------seventh task------------
Route::get('/task-7', 'PostsController@task7');

//-------------eighth task------------
Route::get('/task-8', 'PostsController@task8');

//-------------ninth task------------
Route::get('/task-9', 'PostsController@task9');

Route::get('/sqlTask-1', 'PostsController@sqlTask1');

Route::get('/sqlTask-2', 'PostsController@sqlTask2');

Route::get('/sqlTask-3', 'PostsController@sqlTask3');

Route::get('/sqlTask-4', 'PostsController@sqlTask4');

Route::get('/sqlTask-5', 'PostsController@sqlTask5');

//Route::get('/', function () {
//    return view('welcome');
//}