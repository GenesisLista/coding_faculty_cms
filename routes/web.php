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

// Route::get('post/{id}/{name}', 'PostsController@show_post');

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('contact', 'PostsController@contact');

/* Database Raw SQL Queries PDO */
// Route::get('/insert', function () {
//     DB::insert('INSERT INTO posts(title, content) VALUES(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that happened to PHP']);
// });

// Route::get('read', function () {

//     $results = DB::select('SELECT * FROM posts WHERE id = ?', [1]);

//     // return $results;
//     return var_dump($results);

//     /* foreach($results as $post){
//         return $post->title;
//     } */

// });

// Route::get('update', function () {

//     $update = DB::update('UPDATE posts SET title = "Update Title" WHERE id = ?', [1]);

//     return $update;

// });

Route::get('delete', function () {

    $delete = DB::delete('DELETE FROM posts WHERE id = ?', [1]);

    return $delete;

});



Route::group(['middleware' => ['web']], function () {
    
});
