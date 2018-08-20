<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('/css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
     <div id="app">
        @yield('body')
     </div>

    <script src = "{{ mix('/js/manifest.js') }}"></script>
    <script src = "{{ mix('/js/vendor.js') }}"></script>
     @yield('app-js')
</body>
</html>