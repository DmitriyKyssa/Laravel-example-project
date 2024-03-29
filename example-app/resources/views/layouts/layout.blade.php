<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{--    <div>--}}
{{--        <nav>--}}
{{--            <ul>--}}
{{--                <li><a href="{{ route('home.index') }}">Home</a></li>--}}
{{--                <li><a href="{{ route('contact.index') }}">Contact</a></li>--}}
{{--                <li><a href="{{ route('about.index') }}">About</a></li>--}}
{{--                <li><a href="{{ route('test.index') }}">Test</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </div>--}}
    @yield('content')
</body>
</html>
