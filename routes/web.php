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

// Route::get('/', function () {
//     return view('homepage');
// })->name('homepage');

Route::get('test', function () {
    return view('homepage');
})->name('test');

Route::get('/', 'ArticleInsertController@getHomepage')->name('homepage');
Route::get('/about', 'ArticleInsertController@getAbout')->name('about');
Route::get('/bracket', 'BracketController@getView')->name('bracket');

Route::get('article/{id}', 'ArticleInsertController@viewArticle')->name('viewArticle');

Route::middleware('can:accessPanel')->group(function() {
    Route::prefix('panel')->group(function () {

        Route::get('admin', 'AdminController@get')->name('admin');

        Route::get('articles', 'ArticleInsertController@get')->name('articles');
        Route::get('articles/edit', 'ArticleInsertController@edit')->name('editArticle');
        Route::get('articles/new', function () {return view('newarticle');})->name('newarticle');
        Route::post('articles/new','ArticleInsertController@insert');
        Route::post('articles/update','ArticleInsertController@update')->name("updateArticle");
        Route::post('articles/delete','ArticleInsertController@delete')->name("deleteArticle");

        Route::get('users', 'UserController@get')->name('usersList');
        Route::get('users/edit', 'UserController@edit')->name('editUser');
        Route::post('users/update','UserController@update')->name("updateUser");
        Route::post('users/delete','UserController@delete')->name("deleteUser");

    });
});

Route::get('/login', function () {
    return view('login');
});


Route::get('register', function () {return view('register');})->name('register');

Auth::routes();

Route::redirect('/home', '/uec')->name('home');
