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

Route::get('admin/posts/examples' ,array('as' => 'admin.home', function(){
    $url = \route('admin.home');

        return "This url is ". $url;

}));

Route::get('/post/{id}', 'App\Http\Controllers\PostsController@index');

Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

Route::get('post/{id}/{name}/{password}','App\Http\Controllers\PostsController@show_post');
