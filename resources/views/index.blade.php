<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
    </head>
    <body class="antialiased">
        <p>Enter a name for a greeting</p>

        <form action="/hello" method="GET">
            @csrf

            <label for="name">name</label>
            <input id="name" name="name" type="text" />
            
            <label for="address">address</label>
            <input id="address" name="address" type="text" />
            
            <label for="password">password</label>
            <input id="password" name="password" type="password" />

            <button type="submit">send the request</button>
        </form>
    </body>
</html>
