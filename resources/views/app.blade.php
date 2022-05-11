<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{env('APP_NAME')}}</title>

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
	

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ mix('css/template.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.2.7/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.2.7/css/dx.light.css" />
    
</head>
<body>
@if (Auth::check())
    <script>
        window.Laravel = {!!json_encode([
            'isLoggedin' => true,
            'user' => Auth::user()
        ])!!}
    </script>
@else
    <script>
        window.Laravel = {!!json_encode([
            'isLoggedin' => false
        ])!!}
    </script>
@endif
<div id="app">
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="{{ mix ('js/template.js') }}"> </script>
</body>
</html>