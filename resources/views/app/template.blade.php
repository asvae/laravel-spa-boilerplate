<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Several .env variables to be exposed --}}
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="language" content="{{ config('app.locale') }}">
    @if (config('app.debug'))
        <meta name="debug" content="true">
    @endif

    {{-- <link media="all" type="text/css" rel="stylesheet" href="{{ elixir('css/all.css') }}"> --}}
    <title>Laravel api tester</title>
</head>
<body>

@yield('content')

<div id="api-tester">
    <vm-api-tester-main></vm-api-tester-main>
</div>

{{-- <script src="{{ elixir('js/vendor.js') }}"></script> --}}
<script src="{{ elixir('js/app.js') }}"></script>

</body>
</html>