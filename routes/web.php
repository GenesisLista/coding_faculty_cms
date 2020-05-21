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

/*
Route::get('/about', function () {
    return "Hi about page";
});

Route::get('/contact', function () {
    return "Hi contact page";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
    return "This is post number ".$id." ".$name;
}); */

/* rename long url with nickname route */
/* Route::get('admin/posts/example', array('as'=>'admin.home', function () {

    $url = route('admin.home');
    return "This url is " . $url;

})); */

// Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostsController');

//Route::get('post/{id}', 'PostsController@show_post');

Route::get('post/{id}/{name}', 'PostsController@show_post');

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('contact', 'PostsController@contact');

Route::group(['middleware' => ['web']], function () {
    
});
