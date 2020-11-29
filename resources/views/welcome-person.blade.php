<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
    </head>
    <body class="antialiased">
        <h1>Hello {{ $name }}!</h1>
        <p>Address: {{ $address }}</p>
        <p>password: {{ $password }} </p>
    </body>
</html>
