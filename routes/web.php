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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/test', function () {
    return view('layouts/app');
});

Route::prefix('panel')->group(function () {

    Route::get('admin', function () {
        return view('admin');
    })->name('admin');

    Route::get('articles', 'ArticleInsertController@get')->name('articles');

    Route::get('articles/edit', 'ArticleInsertController@edit')->name('editArticle');

    Route::get('articles/new', function () {
        return view('newarticle');
    })->name('newarticle');

    Route::post('articles/new','ArticleInsertController@insert');
    Route::post('articles/update','ArticleInsertController@update')->name("updateArticle");
    Route::post('articles/delete','ArticleInsertController@delete')->name("deleteArticle");
});

Route::get('/login', function () {
    return view('login');
});

Route::get('register', function () {return view('register');})->name('register');

Auth::routes();

Route::redirect('/home', '/uec')->name('home');
