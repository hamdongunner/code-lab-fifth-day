
@extends('layout.master')



@section('navColor')
    navbar-default
@endsection

@section('title')
    Table
@endsection



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-3">

<div class="row">
    <div class="col-md-8  col-lg-8 col-md-offset-2 col-lg-offset-2">
        <table class="table table-bordered table-responsive">
            <tr>
                <th> Id </th>
                <th> title </th>
                <th> Content </th>
                <th> user-id </th>
                <th> created at </th>
                <th> updated at </th>
            </tr>
@foreach($blogs as $blog)
            <tr>
                <th> {{$blog->id}} </th>
                <th> {{$blog->title}} </th>
                <th> {{$blog->content}} </th>
                <th> {{$blog->user_id}} </th>
                <th> {{$blog->created_at}} </th>
                <th> {{$blog->updated_at}} </th>
            </tr>
            @endforeach
        </table>
    </div>
</div>

            </div>
        </div>
    </div>
@endsection
