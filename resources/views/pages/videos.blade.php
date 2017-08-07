@extends('layout.master')


@section('videos')
    active
@endsection


@section('title')
    Videos
@endsection

@section('navColor')
    navbar-inverse
@endsection


@section('js')
    <script>
        alert('hello');
    </script>
@endsection



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-3">
                <h1>Videos id is {{$id}}</h1>
                <h1>Videos number is {{$number}}</h1>
            </div>
        </div>
    </div>
@endsection
