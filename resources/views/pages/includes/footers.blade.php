<footer class="footer-bg footer-p pt-90" >

    <div class="container">
        <div class="inner-container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="top-center">
                        <div class="text">{{ setting('page_description') }}</div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="info-btn">
                        <i class="icon fal fa-mobile"></i>
                        <div class="content">
                            <h5 class="title">Llamanos al </h5>
                            <a href="tel:+34{{ setting('page_cellphone') }}" class="phone-no">+34{{ setting('page_cellphone') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top pb-70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-sm-12">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Sobre nosotros</h2>
                        </div>
                        <div class="footer-link">
                            <p>{{ setting('page_description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-12">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Enlaces útiles</h2>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="{{ route('index') }}">Inicio</a></li>
                                <li><a href="{{ route('about') }}">Sobre nosotros</a></li>
                                <li><a href="{{ route('services') }}">Servicios de taxi</a></li>
                                <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                                <li><a href="{{ route('faqs') }}">Preguntas frecuentes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-12">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Contáctenos</h2>
                        </div>
                        <div class="f-contact">
                            <ul>
                                <li><i class="icon fal fa-phone"></i> <a href="tel:+34{{ setting('page_cellphone') }}">+34{{ setting('page_cellphone') }}</a></li>
                                <li><i class="icon fal fa-envelope"></i> <a href="mailto:{{ setting('page_email') }}">{{ setting('page_email') }}</a></li>
                                <li><i class="icon fal fa-map-marker-check"></i> {{ setting('page_address') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copy-text">
                        {{ setting('page_copyright') }} {{ setting('page_designed') }}
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <ul>
                        <li><a href="#">Politicda de privacidad</a></li>
                        <li><a href="#">Terminos y condiciones</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
