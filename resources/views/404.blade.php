@extends('layouts.app')

@section('content')
    <!-- ----start not-found part---- -->
    <header class="not-found-menu">
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
                        <input type="search" id="search-input" placeholder="Verify Your Report" name="search" >
                        <img src="{{ asset('storage/images/MagnifyingGlass.png') }}" class="submit" onclick="submit()" alt="MagnifyingGlass">
                    </div>
                </form>
            </div>
        </div>
    </header>


    <section>
        <div class="not-found-part">
            <div>
                <h3 class="oops-title">Oops! We couldn’t find results for your search:</h3>
                <h4 class="not-found-text">“{{ $data }}”</h4>
                <img src="{{ asset('storage/images/not-found.png') }}" alt="not-found">
            </div>
        </div>
    </section>
    <!-- ----end not-found part---- -->
@endsection
