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
Route::group(['namespace'=>'Admin', 'prefix'=>'admin','middleware' => ['auth']], function ()
{
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/categories', 'CategoriesController',['as'=>'admin']);
    Route::resource('/posts', 'PostsController', ['as'=>'admin']);

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//blog
Route::group(['namespace'=>'Blog', 'prefix'=>'blog'], function()
{
    Route::resource('posts', 'PostsController')->only('index');
});
Route::get('/', function () {
    return view('welcome');
});



/*Route::get('/', "PostsController@index");
Route::get('/posts/create', "PostsController@create");
Route::get('/posts/{post}', "PostsController@show");
Route::post('/post', "PostsController@store");
Route::get('/posts/{post}/edit', "PostsController@edit");
Route::patch('/posts/{post}', "PostsController@update");
Route::delete('/posts/{post}', "PostsController@destroy");*/