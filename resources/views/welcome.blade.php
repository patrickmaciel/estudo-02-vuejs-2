<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Larticles App</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('assets/bootstrap4/css/bootstrap.min.css') }}">
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <div class="container">
                <articles></articles>
            </div>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="{{ asset('assets/bootstrap4/js/bootstrap.min.js') }}"></script>
    </body>
</html>
