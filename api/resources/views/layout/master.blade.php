<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sangfor Cyber Command</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    @include('layout.navbar')

    @yield('body')
    
    @include('layout.footer')
</body>
</html>