<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('img/fav.png')}}">
    @include('includes.header-link')
    @yield('style')
    <title>{{setting('site.title')}}</title>
</head>
<body>
    <div class="main-wrapper">
        @include('includes.navbar')