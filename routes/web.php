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

Route::get('/', 'ArticleInsertController@getHomepage')->name('homepage');
Route::get('/about', 'ArticleInsertController@getAbout')->name('about');
Route::get('/terms', 'ArticleInsertController@getTerms')->name('terms');
Route::get('/regulamin', 'ArticleInsertController@getRegulamin')->name('regulamin');
Route::get('/bracket', 'APIController@getBracket')->name('bracket');
Route::get('/teams', 'APIController@getList')->name('teams');
Route::get('/schedule', 'APIController@getSchedule')->name('schedule');
Route::get('/test', 'ArticleInsertController@getTest')->name('test');
Route::get('/schedule-f1', function () {return view('schedule-f1');})->name("schedule-f1");
Route::get('/team-f1', function () {return view('team-f1');})->name("team-f1");

Route::get('article/{id}', 'ArticleInsertController@viewArticle')->name('viewArticle');


Route::get('/list', 'APIController@getList')
    ->name('list');
Route::get('/send', 'APIController@update')
    ->name('send');

Route::middleware('can:accessPanel')->group(function() {
    Route::prefix('panel')->group(function () {

        Route::get('dashboard', 'TeamsController@dashboard')->name('dashboard');
        Route::post('createTeam', 'TeamsController@insert')->name('createTeam');
        Route::post('editTeam', 'TeamsController@update')->name('editTeam');

        Route::post('invite', 'TeamsController@invite')->name('invite');
        Route::post('acceptInvite', 'TeamsController@acceptInvite')->name('acceptInvite');
        Route::post('rejectInvite', 'TeamsController@rejectInvite')->name('rejectInvite');
        Route::post('remove', 'TeamsController@remove')->name('remove');

        Route::get('profile', 'UserController@getProfile')->name('profile');
        Route::post('profileEdit', 'UserController@updateProfile')->name('profileEdit');

        Route::get('signIn', 'TeamsController@signIn')->name('signIn');
        Route::post('signIn/create', 'APIController@signIn')->name('createSignIn');

        Route::middleware('can:accessDashboard')->group(function() {
            Route::get('admin', 'AdminController@get')->name('admin');
            Route::get('registration', 'APIController@registration')->name('registration');
            Route::get('uec2', 'TeamsController@getTournamentTeams')->name('uec2');
        });

        Route::middleware('can:accessArticles')->group(function() {
            Route::get('articles', 'ArticleInsertController@get')->name('articles');
            Route::get('articles/edit', 'ArticleInsertController@edit')->name('editArticle');
            Route::get('articles/new', function () {return view('newarticle');})->name('newarticle');
            Route::post('articles/new','ArticleInsertController@insert');
            Route::post('articles/update','ArticleInsertController@update')->name("updateArticle");
            Route::post('articles/delete','ArticleInsertController@delete')->name("deleteArticle");
        });

        Route::middleware('can:accessUsers')->group(function() {
            Route::get('users', 'UserController@get')->name('usersList');
            Route::get('users/edit', 'UserController@edit')->name('editUser');
            Route::post('users/update','UserController@update')->name("updateUser");
            Route::post('users/delete','UserController@delete')->name("deleteUser");
        });

    });
});

Route::get('/login', function () {
    return view('login');
});


Route::get('register', function () {return view('register');})->name('register');

Auth::routes();

Route::redirect('/home', '/uec')->name('home');
