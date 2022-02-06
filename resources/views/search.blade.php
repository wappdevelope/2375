@extends('layouts.app')

@section('content')
    <!------------- start pdf file ----------------->
    <section class="pdf-file-part">
        <div class="pdf-part">
            <h2>
                Search result for
                <span> “{{ $name }}”</span>
            </h2>
            <div class="pdf-full-info">
                <div class="pdf-info">
                    <h3>{{ $name }}</h3>
                    <embed src="{{ $file }}" type="application/pdf" width="100%" height="600px">
                </div>
                <div class="functional-icon">
                    <a href="https://telegram.me/share/url?url=https://localhost/2375/public/{{ $file }}" target="_blank" style="text-decoration: none;">
                        <img src="{{ asset('storage/images/share.png') }}" alt="share">
                    </a>
                    <a href="{{ $file }}" style="text-decoration: none;">
                        <img src="{{ asset('storage/images/download.png') }}" alt="download">
                    </a>
                    <a href="javascript: window.print()" style="text-decoration: none;">
                        <img src="{{ asset('storage/images/print.png') }}" alt="print">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!------------- end pdf file ----------------->
@endsection
