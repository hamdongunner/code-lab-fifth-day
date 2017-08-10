
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

            <br >
            <br >
            <form class="panel panel-warning" method="post" action="/blogs/add/request">
                {{csrf_field()}}
            <select class="form-control" name="id">
                @foreach($users as $user)
                <option>{{$user->id}}</option>
                @endforeach
            </select>
                <input type="text" class="form-control" name="add" id="exampleInputPassword1" placeholder="enter the title ">
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <br >
            <br >
            <br >
            <div class="col-md-8 col-md-offset-2">
                <table class="text-center table table-responsive table-bordered">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Content</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Updated At</th>
                        <th class="text-center">Action</th>
                    </tr>

                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td>{{$blog->username}}</td>
                            <td>{{$blog->created_at}}</td>
                            <td>{{$blog->updated_at}}</td>
                            <td><a href="/blogs/delete/{{$blog->id}}">Delete</a>
                            {{--<th><a href="/blogs/edit/{{$blog->id}}">Edit</a></th>--}}
                            <th><a href="/blogs/edit/{{$blog->id}}">Edit</a></th>
                            </td>
                        </tr>
                    @endforeach

                </table>
                <div class="text-center">{{$blogs->links()}}</div>
            </div>
        </div>
    </div>
@endsection

