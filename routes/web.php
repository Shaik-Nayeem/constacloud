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
    return view('auth/login');
});
//LOGO
Route::get('/logo',function(){

    return view('uploadlogo');
});

//Route::post('/uploadlogo','CreateController@uploadlogo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index','CreateController@home');

Route::get('/blog',function(){

    return view('blog');
});


Route::get('/blog_show','BlogController@show');

Route::post('/blog_insert','BlogController@bloginsert');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');