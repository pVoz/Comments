<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::post('/post/store', 'App\Http\Controllers\PostController@store')->name('post.store');
Route::get('/post/create', 'App\Http\Controllers\PostController@create')->name('post.create');

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts');
Route::get('/post/show/{id}', 'App\Http\Controllers\PostController@show')->name('post.show');
Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);
// Route::get('/show/{id}', 'CommentController@show');



Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.add');
Route::post('/reply/store', 'App\Http\Controllers\CommentController@replyStore')->name('reply.add');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
