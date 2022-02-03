@extends('layouts.app')

@section('content')
    <!------------- start pdf file ----------------->
    <section class="pdf-file-part">
        <div class="pdf-part">
            <h2>
                Search result for
                <span> “Lorem ipsum”</span>
            </h2>
            <div class="pdf-full-info">
                <div class="pdf-info">
                    <h3>Lorem ipsum</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sollicitudin cras ac praesent auctor
                        lacinia iaculis aliquet. Leo et congue commodo, semper augue id dictumst eu diam. Neque auctor
                        gravida tortor amet mattis gravida. Dolor, in semper aliquet arcu nam et amet. Blandit pulvinar
                        fusce nunc, nunc, tempus dapibus nisi consectetur. Augue etiam ante diam nisi et. Viverra
                        consequat nibh lorem sed a gravida sagittis, eget dictumst. Rhoncus id sit amet, odio non
                        adipiscing tortor. Urna, felis quisque auctor mi sed neque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sollicitudin cras ac praesent auctor
                        lacinia iaculis aliquet. Leo et congue commodo, semper augue id dictumst eu diam. Neque auctor
                        gravida tortor amet mattis gravida. Dolor, in semper aliquet arcu nam et amet. Blandit pulvinar
                        fusce nunc, nunc, tempus dapibus nisi consectetur. Augue etiam ante diam nisi et. Viverra
                        consequat nibh lorem sed a gravida sagittis, eget dictumst. Rhoncus id sit amet, odio non
                        adipiscing tortor. Urna, felis quisque auctor mi sed neque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sollicitudin cras ac praesent auctor
                        lacinia iaculis aliquet. Leo et congue commodo, semper augue id dictumst eu diam. Neque auctor
                        gravida tortor amet mattis gravida. Dolor, in semper aliquet arcu nam et amet. Blandit pulvinar
                        fusce nunc, nunc, tempus dapibus nisi consectetur. Augue etiam ante diam nisi et. Viverra
                        consequat nibh lorem sed a gravida sagittis, eget dictumst. Rhoncus id sit amet, odio non
                        adipiscing tortor. Urna, felis quisque auctor mi sed neque.
                    </p>
                </div>
                <div class="functional-icon">
                    <img src="{{ asset('storage/images/share.png') }}" alt="share">
                    <img src="{{ asset('storage/images/download.png') }}" alt="download">
                    <img src="{{ asset('storage/images/print.png') }}" alt="print">
                </div>
            </div>
        </div>
    </section>
    <!------------- end pdf file ----------------->
@endsection
