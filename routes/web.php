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

//model binding
Route::model('article', 'App\Article');
Route::model('user', 'App\User');




Route::get('/', 'WelcomeController@index');
Route::get('/user/{id}', 'WelcomeController@userShow')->name('userShow');
Route::get('/article/{id}', 'WelcomeController@articleShow')->name('articleShow');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');



// admin routes

Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


//    Route::resource('/article', 'ArticlesController', resourceNames('article'));
});



Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin'], function () {
    // admin article routes
    Route::resource('/article', 'ArticlesController', resourceNames('article'));
    Route::resource('/user', 'UsersController', resourceNames('user'));
});

