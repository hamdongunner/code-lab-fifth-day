
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

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-2 col-lg-offset-3">--}}
                {{--<h1> About hello hamdon crown of my head</h1>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
