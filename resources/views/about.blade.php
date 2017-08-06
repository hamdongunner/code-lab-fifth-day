<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>
<body>
  {{--@unless($var)--}}
    {{--<h5>haha</h5>--}}
  {{--@endunless--}}

{{--@foreach($names as $index=>$name)--}}
{{--@foreach($names as $index=>$name)--}}
    {{--{{$index}}<br>--}}
    {{--or--}}
    {{--{{$loop->index}}<br>--}}
    {{--{{$loop->iteration}}<br>--}}
    {{--{{$loop->first}}<br>--}}
    {{--{{$loop->last}}<br>--}}
    {{--{{$loop -> count}}<br>--}}
    {{--{{$loop->remaining}}<br >--}}
    {{--{{$loop->depth}}--}}

    {{--<li>{{$name}}</li>--}}
    {{--{{date("Y-M-D")}}--}}
{{--@endforeach--}}

  {{--@forelse($names as $name)--}}
      {{--<li>{{$name}}</li>--}}
  {{--@empty--}}
      {{--<li>empyt</li>--}}
  {{--@endforelse--}}

  {{--@php--}}
  {{--$a = 10;--}}
  {{--$b = 5;--}}
   {{--echo $z = $a + $b;--}}
  {{--@endphp--}}

  {{--{{$z}}--}}
{{--@while(true)--}}
{{--<li>do something</li>--}}
{{--@endwhile--}}


  {{--<div id="app">--}}
      {{--{{message}}--}}
      {{--<li v-text="message"></li>--}}
      {{--@{{message}}<br >--}}
      {{--@verbatim--}}
      {{--{{message}}--}}
      {{--@endverbatim--}}
  {{--</div>--}}



  {{--@empty(false)--}}
      {{--<li>not empty</li>--}}
  {{--@endempty--}}


{{--@isset($var)--}}
    {{--<li> {{$var}}</li>--}}
    {{--@endisset--}}










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