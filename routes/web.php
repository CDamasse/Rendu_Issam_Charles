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


Route::resource('/articles', 'ArticleController');

Route::resource('/contact', 'ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


Route::resource('/admin', 'AdminController');
Route::get('/delete/{id}', 'AdminController@deleteArticle');

Route::get('/admin.index', ['middleware' => 'admin', function () {
    //
}]);

Route::resource('/account', 'AccountController');

Route::resource('/message', 'MessageController');

Route::post('/article/{article}/comments', 'CommentsController@store');

