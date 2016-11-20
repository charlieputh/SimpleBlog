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

//Route::get('/','SiteController@index');


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/articles','ArticlesControllers@index');
//Route::get('/articles/create','ArticlesControllers@create');
//Route::get('/articles/{id}','ArticlesControllers@show');
//
//
//Route::post('/articles/store','ArticlesControllers@store');
//Route::get('/articles/{id}/edit','ArticlesControllers@edit');   //如果这里缺少错了 在终端的php artisan会显示语法错误
Route::resource('articles','ArticlesControllers');