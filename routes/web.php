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
//     return view('welcome');
// });

Route::get('/create', 'UserController@create')->name('posts.create')->middleware('auth');
Route::post('/addpost', 'UserController@store')->name('addpost');
Route::get('/', 'UserController@index');
// Route::get('/userpost/{id}', 'UserController@show');

Route::get('/posts/{id}', 'UserController@show')->name('posts.show')->middleware('auth');
Route::delete('/posts/{id}', 'UserController@destroy')->name('posts.destroy')->middleware('auth');
Route::put('');
Route::post('/comment/{id}', 'UserController@comment');

Route::get('/animals', 'PageController@animals')->name('animalpage');
Route::get('/funnythings', 'PageController@funny')->name('funnypage');
Route::get('/randomthings', 'PageController@random')->name('randompage');
Route::get('/sport', 'PageController@sport')->name('sportpage');
// Route::get('/user/{id}', 'UserController@shows');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();


