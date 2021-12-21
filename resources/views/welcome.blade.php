<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full stack</title>
        <link rel="stylesheet" href="css/app.css">

        {{-- <script src="https://unpkg.com/vue@next"></script> --}}
        {{-- <script src="{{ asset('js/app.js') }}" async defer></script> --}}
    </head>
    <body class="antialiased">
        <div id="app">
            <mainapp></mainapp>
        </div>
    </body>
    <script src="{{ asset('/js/app.js') }}"></script>

</html>
