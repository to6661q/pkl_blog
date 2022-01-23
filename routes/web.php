<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/', 'BlogController@index');
Route::get('/isi_profilposts/{slug}', 'BlogController@isi_profilblog')->name('profilblog.isi');
Route::get('/list_profilposts', 'BlogController@list_profilblog')->name('profilblog.list');
Route::get('/list_galeriposts', 'BlogController@list_galeriblog')->name('galeriblog.list');
Route::get('/isi_pengaduanposts', 'BlogController@isi_pengaduanblog')->name('pengaduanblog.isi');


Route::get('/list_profilcategory/{profilcategory}', 'BlogController@list_profilcategory')->name('profilblog.profilcategory');
Route::get('/isi_posts/{slug}', 'BlogController@isi_blog')->name('blog.isi');
Route::get('/list_posts', 'BlogController@list_blog')->name('blog.list');
Route::get('/list_category/{category}', 'BlogController@list_category')->name('blog.category');
Route::get('/cari', 'BlogController@cari')->name('blog.cari');

Route::get('/tampil_dokumen', 'DokumenController@tampil_dokumen') -> name('dokumen.tampil_dokumen');
Route::get('/tampil_dokumen', 'DokumenController@tampil_dokumen') -> name('dokumen.tampil_dokumen');




Route::group(['middleware' => 'auth'], function()
{   
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/profilcategory', 'ProfilcategoryController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/profil', 'ProfilController');
    Route::get('/profil/{idp}', [App\Http\Controllers\ProfilController::class, 'edit'])->name('edit');
    Route::get('/profilposts/tampil_hapus', 'ProfilpostsController@tampil_hapus') -> name('profilposts.tampil_hapus');
    Route::get('/profilposts/restore/{id}', 'ProfilpostsController@restore') -> name('profilposts.restore');
    Route::delete('/profilposts/kill/{id}', 'ProfilpostsController@kill') -> name('profilposts.kill');
    Route::resource('/profilposts', 'ProfilpostsController');
    Route::get('/posts/tampil_hapus', 'PostsController@tampil_hapus') -> name('posts.tampil_hapus');
    Route::get('/posts/restore/{id}', 'PostsController@restore') -> name('posts.restore');
    Route::delete('/post/kill/{id}', 'PostsController@kill') -> name('posts.kill');
    Route::resource('/posts', 'PostsController');
    Route::resource('/user', 'UserController');
    Route::resource('/pengaduanmasyarakat', 'PengaduanmasyarakatController');
    Route::get('/dokumen/tampil_hapus', 'DokumenController@tampil_hapus') -> name('dokumen.tampil_hapus');
    Route::get('/dokumen/restore/{id}', 'DokumenController@restore') -> name('dokumen.restore');
    Route::delete('/dokumen/kill/{id}', 'DokumenController@kill') -> name('dokumen.kill');
    Route::resource('/dokumen', 'DokumenController');
    
   
});