@extends('layouts.app')

@section('content')
    <!-- ---international part start -->
    <section class="fixed-part ">
        <div class="page-icons-part">
            <ul class="images-list" id="mainNav">
                <li class="active">
                    <a href="#about-us" onclick="switchPanel(0)">
                        <img src="{{ asset('storage/images/test.svg') }}" alt="info">
                    </a>
                </li>
                <li>
                    <a href="#education" onclick="switchPanel(1)">
                        <img src="{{ asset('storage/images/Group3.png') }}" alt="hat">
                    </a>
                </li>
                <li>
                    <a href="#search" onclick="switchPanel(2)">
                        <img src="{{ asset('storage/images/Group5.png') }}" alt="search">
                    </a>
                </li>
                <li>
                    <a href="#contact-us" onclick="switchPanel(3)">
                        <img src="{{ asset('storage/images/Group2.png') }}" alt="message">
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- ---international part start -->
    <main>
        <div class="opacity-div">
            <div class="img-group">
                <div>
                    <h1 class="international-title">International Gemmological and diamond laboratories</h1>
                </div>
            </div>
        </div>
    </main>
    <!-- international part end -->

    <!-- ----start about us -->
    <section class="about-us panel" id="about-us">
        <div class="about-us-text">
            <div class="about-us-left">

                <div class="about">
                    <h2 class="about-us-title">About us </h2>
                    <p class="about-us-info">
                        International Gemmological and Diamond Laboratories are leaders in independent gemstone, diamond
                        appraisals and independent grading certification. Our expert team of qualified gemmologists
                        ensure the authenticity of gemstones through a stringent grading process. Our aim is providing
                        absolute quality checking, quality assurance and confidence to jewellers and customers alike.
                        Using state of the art technology and equipment, our team of graders are able to stringently and
                        critically grade gemstones to an internationally recognised quality standard.
                    </p>
                </div>
            </div>
            <div class="img-div">
                <img src="{{ asset('storage/images/AdobeStock_288314477 1.png') }}" alt="">
                <div class="opacity-div1"></div>
            </div>
        </div>
    </section>
    <!-- ----end about us -->


    <!-- ----start education part---- -->

    <section class="education panel" id="education">
        <div>
            <div>
                <div class="education-info">
                    <h2>Education</h2>
                    <h3>GRADING STANDARD</h3>
                    <p>IGDL grade gemstones and diamonds to an internationally recognised standard using the standard
                        D-Z, IF-I3, grading standard which is adhered to by most reputable leading laboratories. </p>
                </div>
            </div>
            <div class="color-granding">
                <h3>COLOUR GRADING </h3>
                <div class="colored-div">

                    <div class="imaged-div">
                        <img src="{{ asset('storage/images/image1.png') }}" alt="diamond-type" class="dimond-img">
                        <div class="clarity">
                            <h3>CLARITY GRADING CHART</h3>
                            <img src="{{ asset('storage/images/image2.png') }}" alt="clarity">
                        </div>

                        <div class="cut">
                            <h3>CUT</h3>
                            <img src="{{ asset('storage/images/image3.png') }}" alt="cut-img">
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- ---end education part----- -->


    <!-- -----start diamond part---- -->
    <section class="diamonds">
        <div>
            <h3>DIAMONDS</h3>
            <p>At IGDL, our team undertake the grading and certification of diamonds of all shapes, colours
                and sizes. Please enquire if you would like us to certificate your diamonds.</p>
            <img src="{{ asset('storage/images/diamonddss1.png') }}" alt="diamonddss">
        </div>
    </section>
    <!-- end diamond part -->


    <!-- -----start synthetic part---- -->
    <section class="synthetic">
        <div class="opacity-div">
            <div class="synthetic-and-word">
                <h2>SYNTHETIC DETECTION</h2>
                <p>In a world where laboratory grown diamonds are more readily available, it is imperative to ensure
                    your natural diamond is in fact not a synthetic or simulant. Here at IGDL we give the assurances to
                    our jewellery partners that the stones they source are in fact 100% natural. </p>
            </div>
        </div>
    </section>
    <!-- ----end synthetic part----- -->



    <!----- start search part------ -->

    <section class="search panel" id="search">
        <div class="search-parent">
            <div class="report">
                <h2>Search for Certificate Number</h2>
                <h3>VERIFY YOUR REPORT</h3>
                <p>Please enter the 12 digit reference number to verify your report. This number can be found on the
                    physical certificate, or can be given to you by your jeweller. </p>
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    
                    <div class="input-div">
                        <input type="text" name="search">
                        <img src="{{ asset('storage/images/search1.png') }}" alt="search-icon">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- -----end search part----- -->



    <!-- -----start footer part ------->

    <footer id="contact-us" class="panel">
        <div class="footer-part">
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
@endsection
