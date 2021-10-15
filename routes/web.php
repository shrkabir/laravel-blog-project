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

use phpDocumentor\Reflection\DocBlock\Tags\Uses;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add', [
    'uses'  => 'CategoryController@index',
    'as'    => 'add-category'
]);

Route::post('/category/save', [
    'uses'  =>  'CategoryController@saveNewCategory',
    'as'    =>  'save-new-category'
]);
