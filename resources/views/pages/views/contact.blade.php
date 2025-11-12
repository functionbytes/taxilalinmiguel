@extends('layouts.pages')

@section('title', 'Contactenos')

@section('content')

 <!-- breadcrumb-area -->
 <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/pages/img/bg/bdrc-bg.png)">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contactenos</li>
                        </ol>
                    </nav>
                </div>
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>Contactenos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">
    <div class="animations-09"><img src="/pages/img/bg/ani-contact.png" alt="an-img-01"></div>
    <div class="container">

        <div class="row">
                 <div class="col-lg-4 col-md-12 order-1">
                    <div class="section-title p-relative pr-60 mb-30 wow fadeInLeft   animated" data-animation="fadeInLeft" data-delay=".4s" style="visibility: visible; animation-name: fadeInLeft;">
                        <h3>
                            Contactenos
                        </h3>
                    </div>
                    <div class="contact-info">
                          <div class="single-cta wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                            <ul>
                                <li><a href="">{{ setting('page_address') }}</a></li>
                                <li><a href="mailto:{{ setting('page_email') }}">{{ setting('page_email') }}</a></li>
                                <li><a href="tel:+34{{ setting('page_phone') }}">+34{{ setting('page_phone') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-8 col-md-12 order-2">
                    <div class="contact-bg">
                        <form action="" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <i class="fas fa-user"></i>
                                            <input type="text" id="firstn" name="firstn" placeholder="Nombres" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <i class="fas fa-envelope-open"></i>
                                            <input type="text" id="email" name="email" placeholder="Correo electronico" required="">
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <input type="text" id="subject" name="Subject" placeholder="Asunto">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">
                                            <i class="fas fa-pencil"></i>
                                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="slider-btn">
                                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">
                                                        Enviar <i class="fa-sharp fa-light fa-arrow-up"></i>
                                                    </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

</section>

 @include ('pages.partials.call')


@endsection
