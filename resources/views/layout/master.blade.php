<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>


<nav class="navbar @yield('navColor') navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 ">
            <ul class="nav navbar-nav">
                <li class="@yield('home')"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li class="@yield('about')"><a href="/about">About</a></li>
                <li class="@yield('about')"><a href="/get_blogs">get_blogs</a></li>
                <li class="@yield('signout')"><a href="/out">Singout</a></li>


            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div style="padding: 50px">

@yield('content')
@yield('js')

</div>




{{--<div class="row" style="position: fixed; bottom:0;background-color: #E1696A;background-image: url(http://codelab.camp/ninja.png);background-repeat: no-repeat;background-position: 95% 0%;background-size: contain;color: #fff;">--}}
    {{--<div class="col-lg-8 col-md-8 col-sm-8  col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" >--}}
        {{--<h1>Contact Us</h1>--}}
        {{--{{date("Y/m/d")}}--}}
        {{--<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur eaque enim eveniet harum id ipsum, minus, voluptate!</h4>--}}
        {{--<a type="button" href="https://www.facebook.com/CodeLabBootcamp/" class="tramspamint" style="color: #ffffff ;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>--}}
        {{--<br><br>--}}
    {{--</div>--}}
{{--</div>--}}





<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<script src="https://unpkg.com/vue"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        }
    })
</script>
</body>
</html>