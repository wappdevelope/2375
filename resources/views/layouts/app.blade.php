<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- styles --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
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


        <!-- ---international part start -->
        <main>
            <div class="opacity-div">
                <div class="img-group">
                    <div>
                        <ul class="images-list">
                            <li>
                                <a href="#">
                                    <img src="{{ asset('storage/images/Group 4.png') }}" alt="info">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('storage/images/Group 3.png') }}" alt="hat">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('storage/images/Group 5.png') }}" alt="search">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('storage/images/Group 2.png') }}" alt="message">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="{{ asset('storage/images/igdlbig.png') }}" alt="igdl-blue">
                    </div>
                </div>
            </div>
        </main>
        <!-- international part end -->

        @yield('content')

        <!-- -----start footer part ------->
        <footer>
            <div class="footer-part">
                <div class="footer-list">
                    <ul class="images-list">
                        <li>
                            <a href="#">
                                <img src="{{ asset('storage/images/info1.png') }}" alt="info">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('storage/images/hat3.png') }}" alt="hat">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('storage/images/search.png') }}" alt="search">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('storage/images/messages.png') }}" alt="message">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact-us-part">
                    <h3 class="contact-us-title">Contact us</h3>
                    <form action="" class="contact-us-form">
                        <div>
                            <label for="text-input">Contact name</label>
                            <input type="text" id="text-input" name="contact">
                        </div>
                        <div>
                            <label for="email-input">Email</label>
                            <input type="email" id="email-input" name="email">
                        </div>
                        <div>
                            <label for="question">Type your question</label>
                            <textarea id="question" name="question"></textarea>
                        </div>
                        <button type="submit">Contact us</button>
                    </form>
                </div>
            </div>
        </footer>

        <!----- end footer part ------>

    </body>

</html>
