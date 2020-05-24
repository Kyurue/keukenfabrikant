<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
route::resource('posts', 'PostsController');
Route::get('create', 'PostsController@create');
Auth::routes();
Route::get('/home', 'PagesController@index')->name('home');
route::resource('admin/posts', 'HomeController');
route::resource('admin/users', 'userController');
route::resource('profile', 'profileController');
Route::get('/contact', function() {
    return view('pages.contact');
});

Route::group(['middleware' => ['auth']], function(){
    Route::post('favorite/{post}/add', 'FavoriteController@add')->name('post.favorite');
});