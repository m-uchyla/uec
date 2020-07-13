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

// Route::get('/panel', function () {
//     return view('admin');
// });

Route::prefix('panel')->group(function () {
    Route::get('admin', function () {
        return view('admin');
    });
    Route::get('articles', function () {
        return view('articles');
    });
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('register', function () {return view('register');})->name('register');

Auth::routes();

Route::redirect('/home', '/uec')->name('home');
