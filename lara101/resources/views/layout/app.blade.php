<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="/css/foundation.min.css" rel="stylesheet" type="text/css">
        <link href="/css/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css">
        <link href="/css/foundation-datepicker.css" rel="stylesheet" type="text/css">
        <link href="/css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       @section('content')
       @show
        <div class="row">
            <div class="large-8 large-offset-2 column">
                    <small>Powered by: Laravel 5.4</small>
            </div>
       </div>
    </body>
    <script src="/js/jquery.js"></script>
    <script src="/js/what-input.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script src="/js/foundation-datepicker.js"></script>
    <script src="/js/main.js"></script>
</html>