@extends('layout.master')

@section('home')
    active
@endsection

@section('navColor')
    navbar-default
@endsection

@section('title')
    Edit
@endsection



@section('content')
    <form class="panel panel-warning" method="post" action="/blogs/edit/request/{{$id}}">
        <br >
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">the new title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
