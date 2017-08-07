<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>


            <div class="content">
                    <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-offset-4 col-sm-3 col-lg-3">

                        <div style="margin-bottom: 50%;" class="thumbnail">
                            <img src={{$item["image"]}} class="img-responsive" alt="Responsive image">
                            <div class="caption">
                                <h3 class="text-center">{{$item["title"]}}</h3>
                                <p class="text-center">{{$item["des"]}}</p>
                            </div>
                        </div>
                </div>
               </div>
        </div>
    </body>
</html>
