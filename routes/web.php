<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/sub-category','PostController@category')->name('sub.category');
Route::get('/all-posts','PostController@Post')->name('all.posts');
