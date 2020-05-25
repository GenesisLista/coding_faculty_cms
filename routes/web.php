<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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
// Route::get('insert', function () {
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

// Route::get('delete', function () {

//     $delete = DB::delete('DELETE FROM posts WHERE id = ?', [1]);

//     return $delete;

// });

/* Eloquent Database ORM - Object Relational Mapper */
// Route::get('read', function () {
//     $posts = Post::all();

//     foreach($posts as $post) {
//         return $post->title;
//     }
// });

// Route::get('find', function () {
//     $posts = Post::find(2);
//     return $posts->title;
// });

/* Retrieve data with condition */
// Route::get('find', function () {
//     $posts = Post::where('id', 4)->orderBy('id', 'desc')->take(1)->get();
//     return $posts;
// });

// Route::get('find', function () {
//     $posts = Post::findOrFail(2);
//     return $posts;

//     //$posts = Post::where('users_count', '<', 50)->firstOrFail();
// });

/* Eloquent to insert data */
Route::get('insert', function () {
    $post = new Post;

    $post->title = 'New Eloquent Title insert 2';
    $post->content = 'Wow Eloquent is really cool, look at this content 2!';
    $post->save();

});

/* Eloquent to find data */
// Route::get('find', function () {
//     $post = Post::find(2);

//     $post->title = 'New Eloquent Title insert 2';
//     $post->content = 'Wow Eloquent is really cool, look at this content 2!';
//     $post->save();

// });

/* Eloquent to mass insert data using form */
// Route::get('create', function () {
//     Post::create(['title'=>'The create method 2', 'content'=>'This is the content for the create method 2']);
// });

/* Eloquent to update data using form */
// Route::get('update', function () {
//     Post::where('id', 3)->where('is_admin', 0)->update(['title'=>'New PHP Title', 'content'=>'This is a new content']);
// });


/* Eloquent to delete data */
// Route::get('delete', function () {
//     $post = Post::find(4);
//     $post->delete();
// });

// Route::get('delete', function () {
//     Post::destroy([7,8]);
// });

/* Eloquent to delete data and trash - soft delete */
Route::get('softdelete', function () {
    Post::find(10)->delete();
});

/* Eloquent to display soft delete data */
Route::get('readsoftdelete', function () {
    //$post = Post::withTrashed()->where('id', 2)->get(); // Single pull of data
    $post = Post::onlyTrashed()->get(); // Multiple pull of data
    return $post;
});

/* Eloquent to restore soft delete data */
Route::get('restoresoftdelete', function () {
    Post::withTrashed()->restore();
});

/* Eloquent to permanently delete soft delete data */
Route::get('forcedelete', function () {
    Post::onlyTrashed()->forceDelete();
});

Route::group(['middleware' => ['web']], function () {
    
});
