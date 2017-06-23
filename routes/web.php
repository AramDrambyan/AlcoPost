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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
*/
Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('posts', ['uses' => 'PostsController@getPosts'])->name('posts');
    Route::post('posts', ['uses' => 'PostsController@create'])->name('create');
    Route::get('posts/add', ['uses' => 'PostsController@addPost'])->name('addPost');
});

Route::get('/home', 'HomeController@index')->name('home');
