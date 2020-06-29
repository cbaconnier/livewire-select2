<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}"
          rel="stylesheet">

    <script defer
            src="{{ mix('js/app.js') }}"></script>

    <livewire:styles />

</head>


<body>

@yield('content')

<livewire:scripts />
</body>
</html>
