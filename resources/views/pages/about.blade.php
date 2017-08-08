
@extends('layout.master')

@section('about')
    active
@endsection


@section('title')
    About
@endsection

@section('navColor')
    navbar-inverse
@endsection

@section('content')


    @each('welcome',[["image" => "http://codelab.camp/android.png", "title" => "Android", "des" => "some sabri talk"],["image" => "http://codelab.camp/swift.png", "title" => "Swift", "des" => "some zaid talk"],["image" => "http://codelab.camp/laravel.png", "title" => "Laravel", "des" => "some yousif talk"]],'item')


    @endsection

