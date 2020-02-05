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



//admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/categories', 'CategoriesController', ['as'=>'admin']);
    Route::resource('/articles', 'ArticleController', ['as'=>'admin']);
    Route::resource('/reviews', 'AReviewController', ['as'=>'admin']);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/reviews', 'Blog\ReviewController');
/*
Route::get('/reviews', "ReviewController@index");
Route::post ('/reviews/create', "ReviewController@create");
Route::get('/reviews/{id}/show ', "ReviewController@show");
Route::post('/review', "ReviewController@store");
Route::get('/reviews/{id}/edit', "ReviewController@edit");
Route::post('/reviews/{id}', "ReviewController@update");
Route::delete('/reviews/{id}', "ReviewController@destroy");
*/

Route::group(['namespace' => 'Blog'], function () {
    Route::get('/', "PostsController@index");
    Route::get('/posts/create', "PostsController@create");
    Route::get('/posts/{post}', "PostsController@show");
    Route::post('/post', "PostsController@store");
    Route::get('/posts/{post}/edit', "PostsController@edit");
    Route::patch('/posts/{post}', "PostsController@update");
    Route::delete('/posts/{post}', "PostsController@destroy");

});
/*
 * GET /posts
 * GET /posts/created
 * POST /posts
 * GET /posts/{id}/edit
 * PATCH /posts/{id}
 * GET /posts/{id}
 * DELETE /posts/{ID}
 *
 */