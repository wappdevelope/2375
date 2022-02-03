@extends('layouts.app')

@section('content')
    <!-- ----start not-found part---- -->
    <section>
        <div class="not-found-part">
            <div>
                <h3 class="oops-title">Oops! We couldn’t find results for your search:</h3>
                <h4 class="not-found-text">“Lorem Ipsum”</h4>
                <img src="{{ asset('storage/images/not-found.png') }}" alt="not-found">
            </div>
        </div>
    </section>
    <!-- ----end not-found part---- -->
@endsection
