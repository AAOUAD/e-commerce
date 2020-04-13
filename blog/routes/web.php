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
    return view('welcome');
});
Route::get('/welcome',function(){
    return view("master");
});
Route::get('/ww',function(){
    return view("welcome");
});
Route::post('/hello',function(){
    return view("mpost");
});
Route::get('/posts',"c_post@showpost");
Route::get('/adpost',"c_post@addpost");
Route::post('/inserpost',"c_post@inserpost");
Route::get('/logout',function(){
    Auth::logout();
    return redirect("/posts");
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
