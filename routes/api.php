<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories/published-categories', [
  'uses'  => 'APIController@allPublishedCategories',
  'as'    => 'all-published-categories'
]);

Route::get('/latest-blog', [
  'uses'  => 'APIController@latestBlog',
  'as'    => 'latest-new-blog'
]);

Route::get('/all-blogs-api', [
  'uses'  => 'APIController@allPublishedBlogs',
  'as'    => 'all-published-blogs-api'
]);
