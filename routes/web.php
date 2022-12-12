<?php

use Illuminate\Support\Facades\DB;
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

/*Route::get('/', function () {
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



//Pulling Data from the database
Route::get('/pull', function (){

    $results = DB::select('select * from posts where id=?',[1]);
    //return var_dump($results);

    foreach ($results as $post){

        return $post -> title;

    }

});

Route::get('/update', function (){

    $updated = DB::update('update posts set title = "update Title" where id=?', [1]);
    return $updated;

});

Route::get('/delete', function (){

    $deleted = DB::delete('delete from posts where id=?',[1]);
    return $deleted;

});*/


//inserting into Database Query
Route::get('/insert', function (){

    DB::insert('Insert into posts(title, content) values(?,?)', ['Antidote', 'Antidote is the medicine to a certain illness']);
});

//ELOQuENT

Route::get('/read', function (){

    $posts = App\Models\Post::all();

    foreach ($posts as $post){

        return $post->title;

    }

});

Route::get('/findwhere', function (){

    $posts = App\Models\Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
    return $posts;

});

Route::get('/findmore', function (){

    $posts = \App\Models\Post::findOrFail(2);
    return $posts;

});

Route::get('/basicinsert', function (){

    $post = new App\Models\Post;
    $post->title = 'New Eloquent Insert';
    $post->content = 'Wow! Eloquent is really cool to work with!!';

    $post->save();

});
