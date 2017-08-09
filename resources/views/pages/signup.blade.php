@extends('layout.master')



@section('title')
    Sign Up
@endsection




@section('content')



<div style="padding-top: 30px;" class="container">
    <br ><br >

    <div class="row">
        <div class="col-lg-10 col-lg-offset-2">
            <a href="/login" style="background-color:  #E1696A;color: white;width: 80%;" class="btn btn-default">Login</a>
        </div>
    </div>
    <div class="row">
        {{--@if($errors->any())--}}
        @if($errors->count() > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif
        <br >
        <form class="panel panel-warning" method="post" action="/signup/request">
        {{csrf_field()}}
        {{--<input type="hidden" value="{{csrf_token()}}" name="_token">--}}
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{old('email')}}" class="form-control"  name="email" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Re password</label>
            <input type="password" class="form-control" name="repassword" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>
@endsection