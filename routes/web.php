<?php


//Route::get('/', function () {
//    return view('pages.home');
//});



Route::get('/', 'PageController@getHome');

Route::get('/signup', 'PageController@getSignup');
Route::get('/login', 'PageController@getLogin');

Route::post('/signup/request', 'PageController@requestSignup');




Route::get('/out', 'PageController@requestSignout');

Route::get('/about','PageController@getAbout');