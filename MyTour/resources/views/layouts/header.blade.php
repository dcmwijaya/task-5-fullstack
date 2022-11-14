<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MyTour') }}</title>
        <link rel="icon" href="{{ asset('favicon/favicon-32x32.png') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ mix('/js/app.js') }}"></script>
        <script defer src="{{ url('/fontawesome/js/all.js') }}"></script>
        <script defer src="{{ url('/fontawesome/js/solid.js') }}"></script>
        <script defer src="{{ url('/fontawesome/js/brands.js') }}"></script>
        <script defer src="{{ url('/fontawesome/js/fontawesome.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ url('fontawesome/css/all.css') }}" rel="stylesheet">
        <link href="{{ url('fontawesome/css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ url('fontawesome/css/solid.css') }}" rel="stylesheet">
        <link href="{{ url('fontawesome/css/brands.css') }}" rel="stylesheet">
        <link href="{{ url('fontawesome/css/v5-font-face.css') }}" rel="stylesheet">
        <link href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('bootstrap-icons/icons/bootstrap-icons.css') }}" rel="stylesheet">
    </head>
<body>
    <div id="app">