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

Route::get('/category/manage', [
    'uses'  => 'CategoryController@manageCategoryView',
    'as'    => 'manage-category'
]);

Route::get('category/unpublish/{category_id}', [
    'uses'  => 'CategoryController@unpublishCategory',
    'as'    => 'unpublish-category'
]);

Route::get('category/publish/{category_id}', [
    'uses'  => 'CategoryController@publishCategory',
    'as'    => 'publish-category'
]);

Route::get('category/edit/{category_id}', [
    'uses'  => 'CategoryController@editCategoryView',
    'as'    => 'edit-category'
]);

Route::post('category/update/{category_id}', [
    'uses'  => 'CategoryController@updateCategory',
    'as'    => 'update-category'
]);
