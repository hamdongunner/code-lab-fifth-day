<?php


//Route::get('/', function () {
//    return view('pages.home');
//});



Route::get('/', 'PageController@getHome');

Route::get('/videos/{id?}/{number?}', 'PageController@getvideos');




//Route::get('/videos', function () {
//    return view('pages.videos');
//});

Route::get('/about', function () {
    $var = true;

    $names = ["ali","sabri","jasim"];


//    return view('about',['var'=>$var]);
//    return view('about')->with([$var]);
    return view('pages.about',compact('var','names'));
});