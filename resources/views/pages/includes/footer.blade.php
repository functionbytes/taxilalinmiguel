<footer class="footer-bg footer-p pt-90" >

    <div class="container">
        <div class="inner-container">
            <div class="row">
                <div class="col-sp-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="footer-widget footer-about ">
                        <div class="f-widget-title">
                            <h2>Sobre nosotros</h2>
                        </div>
                        <div class="footer-link">
                            <p>{{ setting('page_description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sp-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="align-items-center justify-content-center row">
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
