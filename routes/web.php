<?php


//Route::get('/', function () {
//    return view('pages.home');
//});



Route::get('/', 'PageController@getHome');

Route::get('/signup', 'PageController@getSignup');
Route::post('/signup/request', 'PageController@requestSignup');

Route::get('/get_blogs', 'PageController@getBlogs');

Route::get('/blogs/edit/{id?}', 'PageController@editBlogsform');
Route::post('/blogs/edit/request/{id?}', 'PageController@editBlogs');
Route::get('/blogs/delete/{id?}', 'PageController@deleteBlogs');




Route::get('/out', 'PageController@requestSignout');

Route::get('/about','PageController@getAbout');