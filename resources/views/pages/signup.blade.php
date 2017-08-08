@extends('layout.master')



@section('title')
    Sign Up
@endsection




@section('content')

<div style="padding-top: 30px;" class="container">
    <div class="row">
    <form class="panel panel-warning" method="post" action="/signup/request">
        {{csrf_field()}}
        {{--<input type="hidden" value="{{csrf_token()}}" name="_token">--}}
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"  name="email" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>
@endsection