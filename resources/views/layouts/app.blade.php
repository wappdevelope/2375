<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <!-- ------header start -->
        <header>
            <div class="header-main">
                <div>
                    <img src="{{ asset('storage/images/IGDL.png') }}" alt="IGDL" id="logo">
                </div>
                <div class="search-input-field">
                    <form action="">
                        <div>
                            <input type="search" id="search-input">
                            <img src="{{ asset('storage/images/MagnifyingGlass.png') }}" alt="MagnifyingGlass">
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <!-- ----end header---------- -->

        @yield('content')

    </body>
</html>
