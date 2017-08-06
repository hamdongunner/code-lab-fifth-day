<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $var = true;

    $names = ["ali","sabri","jasim"];


//    return view('about',['var'=>$var]);
//    return view('about')->with([$var]);
    return view('about',compact('var','names'));
});