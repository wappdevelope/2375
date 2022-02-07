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
                    <div class="share-part">
                        <img src="{{ asset('storage/images/share.png') }}" style="margin: 0; padding: 0;" alt="share">
                        <div class="shared-link">

                            <ul>
                                <li>
                                    <a href="mailto:?subject=https://localhost/2375/public/{{ $file }}"
                                    title="Share by Email">
                                        <img src="{{ asset('storage/images/email.png') }}" alt="email">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://mail.google.com/mail/?view=cm&body=https://localhost/2375/public/{{ $file }}" target="_blank">
                                        <img src="{{ asset('storage/images/gmail.png') }}" alt="gmail">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://telegram.me/share/url?url=https://localhost/2375/public/{{ $file }}" target="_blank" style="text-decoration: none;">
                                        <img src="{{ asset('storage/images/telegram.png') }}" alt="telegram">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/?text=https://localhost/2375/public/{{ $file }}" target="_blank" data-action="share/whatsapp/share">
                                        <img src="{{ asset('storage/images/whatsapp.png') }}" alt="whatsapp">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
