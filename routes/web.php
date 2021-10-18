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

Route::get('/category/unpublish/{category_id}', [
    'uses'  => 'CategoryController@unpublishCategory',
    'as'    => 'unpublish-category'
]);

Route::get('/category/publish/{category_id}', [
    'uses'  => 'CategoryController@publishCategory',
    'as'    => 'publish-category'
]);

Route::get('/category/edit/{category_id}', [
    'uses'  => 'CategoryController@editCategoryView',
    'as'    => 'edit-category'
]);

Route::post('/category/update/{category_id}', [
    'uses'  => 'CategoryController@updateCategory',
    'as'    => 'update-category'
]);

Route::get('/category/delete/{category_id}', [
    'uses'  => 'CategoryController@deleteCategory',
    'as'    => 'delete-category'
]);

Route::get('/blog/add', [
    'uses'  => 'BlogController@index',
    'as'    => 'add-blog'
]);

Route::post('/blog/save', [
    'uses'  => 'BlogController@saveNewBlog',
    'as'    => 'save-new-blog'
]);

Route::get('/blog/manage', [
    'uses'  => 'BlogController@showManageBlogView',
    'as'    => 'manage-blog'
]);

Route::get('/blog/unpublish/{blog_id}', [
    'uses'  => 'BlogController@unpublishBlog',
    'as'    => 'unpublish-blog'
]);

Route::get('/blog/publish/{blog_id}', [
    'uses'  => 'BlogController@publishBlog',
    'as'    => 'publish-blog'
]);

Route::get('/blog/details/{blog_id}', [
    'uses'  => 'BlogController@showBlogDetails',
    'as'    => 'blog-details'
]);

Route::get('/blog/edit/{blog_id}', [
    'uses'  => 'BlogController@showEditBlogPage',
    'as'    => 'edit-blog'
]);

Route::post('/blog/edit/{blog_id}', [
    'uses'  => 'BlogController@updateBlog',
    'as'    => 'update-blog'
]);