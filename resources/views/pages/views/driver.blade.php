@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')
<section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/pages/img/bg/bdrc-bg.png)">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Conductor</li>
                        </ol>
                    </nav>
                </div>
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>Drivers Details</h2>
                    </div>

                    <section class="team-area-content">
                        <div class="container">

                            <!-- Lower Content -->
                            <div class="lower-content">
                                <div class="row">
                                     <div class="col-lg-4 col-md-12 col-sm-12">
                                         <div class="team-img-box">
                                             <a href="team-single.html"><img src="/pages/img/team/team01.png" alt="img"></a>
                                             <div class="footer-social mt-30">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                         </div>
                                     </div>
                                    </div>

                                    <div class="text-column col-lg-8 col-md-12 col-sm-12">
                                       <div class="s-about-content pl-30 wow fadeInRight" data-animation="fadeInRight" data-delay=".2s" style="visibility: visible; animation-name: fadeInRight;">

                                            <h3>About Info</h3>
                                            <div class="per-info">
                                                <div class="info-text">
                                                    <strong>Name</strong>
                                                    <p> Howard Holmes</p>
                                                </div>
                                                <div class="info-text">
                                                    <strong>Experiance:</strong>
                                                    <p>10 Years</p>
                                                </div>
                                                <div class="info-text">
                                                    <p><i class="fal fa-phone"></i> +(963) 2145 3654</p>
                                                    <p><i class="fal fa-envelope"></i> example@example.com</p>
                                                </div>
                                            </div>
                                                <p>Fusce eleifend donec sapien sed phase lusa pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo Etiam ind arcu. Morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit.The world of search engine optimization is complex and ever-changing, but you can easily understand the basics.</p>
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skills-content s-about-content mt-20">
                                                            <div class="skills">
                                                                <div class="skill mb-30">
                                                                  <div class="skill-name">Design</div>
                                                                  <div class="skill-bar">
                                                                    <div class="skill-per" id="80%" style="width: 80%;"></div>
                                                                  </div>
                                                                </div>
                                                                 <div class="skill mb-30">
                                                                  <div class="skill-name">Easy Manage</div>
                                                                  <div class="skill-bar">
                                                                    <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                                  </div>
                                                                </div>
                                                                  <div class="skill mb-30">
                                                                  <div class="skill-name">Project Organize</div>
                                                                  <div class="skill-bar">
                                                                    <div class="skill-per" id="70%" style="width: 70%;"></div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                           <p>Tempor nonummy metus lobortis. Sociis velit etiam, dapibus lectus vehicula pele llentesque cras pat fusce pharetra felis sapien varius Integer dis ads se purus sollicitudin dapibus et vivamus pharetra sit integer dictum in dise natoque an mus quis in. Facilisis inceptos nec, potenti nostra aenean lacinia varius semper ant nullam nulla primis placerat facilisis. Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna potenti cum vestibulum cras. </p>



                                            </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </section>

@include ('pages.partials.call')

@endsection
