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
Auth::routes();

Route::get('/', 'BlogController@index');

Route::group(['middleware' => 'auth'], function(){
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/category', 'CategoryController');
Route::resource('/tags', 'TagsController');
Route::get('/posts/tampil_hapus', 'PostsController@tampil_hapus') -> name('posts.tampil_hapus');
Route::get('/posts/restore/{id}', 'PostsController@restore') -> name('posts.restore');
Route::delete('/post/kill/{id}', 'PostsController@kill') -> name('posts.kill');
Route::resource('/posts', 'PostsController');
Route::resource('/user', 'UserController');
});