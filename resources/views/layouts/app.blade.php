<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </head>

    <body onload="document.getElementById('test').style.opacity='1'">
        <!-- ------header start -->
        <header>
            <div class="header-main">
                <div>
                    <a href="{{ route('root') }}">
                        <img src="{{ asset('storage/images/IGDL.png') }}" alt="IGDL" id="logo">
                    </a>
                </div>
                <div class="search-input-field">
                    <form action="{{ route('search') }}" method="GET">
                        @csrf

                        <div>
                            <input type="search" id="search-input" placeholder="VERIFY YOUR REPORT" name="search" >
                            <img src="{{ asset('storage/images/MagnifyingGlass.png') }}" class="submit" onclick="submit()" alt="MagnifyingGlass">
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <!-- ----end header---------- -->

        @yield('content')

        <!--begin::Javascript-->
		<script src="{{ asset('js/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
