<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="{{ mix('css/theme.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="cat__config--vertical cat__menu-left--colorful">
    <div id="app">
        @include('theme::components.menu.left')
        @include('theme::components.menu.top')

        <div class="cat__content">
            @yield('content')
        </div>
    </div>

    <script src="{{ mix('js/theme.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>