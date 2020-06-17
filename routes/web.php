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



Route::get('/admin', function () {
    return view('admin');
});
Route::get('/', 'TeamController@name');

// Route::get('/admin/teams', 'TeamController@index');
// Route::post('/admin/teams', 'TeamController@store');
// Route::get('/admin/users', 'Users@index');
// Route::get('/admin/users/{id}', 'Users@show');
// Route::post('/admin/users', 'Users@store');

Route::get('/user', 'Users@user');
Route::resource('/admin/users', 'Users');
Route::resource('/admin/teams', 'TeamController');
Route::get('/admin/activities', 'ActivityController@index');
Route::post('/admin/activities', 'ActivityController@store');

Route::get('/teammember', function () {
    return view('teammember');
});

Route::get('/member', function () {
    return view('member');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
