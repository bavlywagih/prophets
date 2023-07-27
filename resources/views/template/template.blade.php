<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="description" content="Sequence Old Testament Prophets">
        <meta name="keywords" content="Sequence Old Testament Prophets">
        <meta name="author" content="bavlywagih">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/print/print.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @if (App::getlocale() == 'ar')
            <link rel="stylesheet" href="{{ asset('css/rtl/app.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('css/ltr/app.css') }}">
        @endif
        
    </head>
    <body>
        <x-navbar.navbar></x-navbar.navbar>
        @include('error/error')
        @yield('content')
        @yield('script')
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>