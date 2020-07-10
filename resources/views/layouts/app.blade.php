<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        @include('partials.menu')
        @yield('content')
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
