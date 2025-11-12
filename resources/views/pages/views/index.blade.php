@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')


    <section id="home" class="slider-area fix p-relative">

        <div class="slider-active" style="background: #141b22;">
            <div class="single-slider slider-bg d-flex align-items-center" style="background-image: url(/pages/img/slider/slider_bg_02.jpeg); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="slider-content s-slider-content mt-70">
                                <h5 data-animation="fadeInUp" data-delay=".4s">Servicio de taxi en lalín</h5>
                                <h2 data-animation="fadeInUp" data-delay=".5s">Viaja con seguridad <br> y <span>comodidad</span></h2>
                                <p data-animation="fadeInUp" data-delay=".6s">Ofrecemos servicios de taxi fiables en toda Pontevedra, lalin y alrededores, diseñados para satisfacer tus necesidades de transporte con rapidez, comodidad y precios competitivos.</p>
                                <div class="slider-btn mt-30" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="/" class="btn ss-btn mr-15" >Reserva ahora</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single-slider slider-bg d-flex align-items-center" style="background-image: url(/pages/img/slider/slider_bg.jpeg); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="slider-content s-slider-content mt-70">
                                <h5 data-animation="fadeInUp" data-delay=".4s">Tu transporte de confianza</h5>
                                <h2 data-animation="fadeInUp" data-delay=".5s">Taxi rápido y eficiente <br> en <span>lalín</span></h2>
                                <p data-animation="fadeInUp" data-delay=".6s">Con nuestro servicio de taxi, podrás desplazarte fácilmente por ciudades, aeropuertos y destinos turísticos en pontevedra. ¡Reserva tu viaje hoy mismo!</p>
                                <div class="slider-btn mt-30" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="/" class="btn ss-btn mr-15" >Reserva tu taxi</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>



    <section class="about-area about-p pt-60 pb-60 p-relative fix">
        <div class="container">
            <div class="row justify-content-center align-items-center">

            <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pr-80 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">
                            <h5> SOBRE NOSOTROS</h5>
                            <h2>Servicio de taxi para cada necesidad </h2>
                        </div>
                         <p>Traslados confiables para cada ocasión: desde tu hogar a cualquier lugar que necesites.  Descubre  servicios, diseñados para tu comodidad.. </p>

                        <div class="row">
                                    <div class="col-lg-12">
                                        <div class="skills-content s-about-content mt-20">
                                            <div class="skills">
                                                <div class="skill mb-30">
                                                  <div class="skill-name">Traslados al Aeropuerto</div>
                                                  <div class="skill-bar">
                                                    <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                  </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Servicios Locales</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Traslados a Eventos y Reuniones</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Servicios 24/7</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Viajes Personalizados</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Viajes Seguros</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Mensajería y Diligencias</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per" id="90%" style="width: 90%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        <div class="row align-items-center mt-20">
                            <div class="col-lg-4 col-xs-4">
                                <div class="slider-btn ">
                                     <a href="{{ route('about') }}" class="btn ss-btn smoth-scroll">Más información</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <div class="ab-img"><img src="/pages/img/features/about_img_02.png" alt="img">   </div>
                       <div class="about-text second-about">
                           <div class="icon">
                                <img src="/pages/img/icon/taxi-icon.png" alt="img">
                           </div>
                           <div class="text">
                                <span>35+</span>
                                <p>Years of Experience</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="steps-area p-relative pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5>Nuestros</h5>
                        <h2>Servicios de Taxi</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                    <!-- Traslados a Aeropuertos -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="step-box-text-one">
                                <div class="icon">
                                    <i class="fa-duotone fa-plane-departure fa-3x"></i>
                                </div>
                                <div class="line"><hr></div>
                                <div class="number">01</div>
                            </div>
                            <div class="step-box-text-two">
                                <h3>Traslados a Aeropuertos</h3>
                                <p>Traslados cómodos y puntuales a todos los aeropuertos de Galicia, asegurando que llegues a tiempo para tu vuelo.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Servicios Locales -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="step-box-text-one">
                                <div class="icon">
                                    <i class="fa-duotone fa-city fa-3x"></i>
                                    
                                </div>
                                <div class="line"><hr></div>
                                <div class="number">02</div>
                            </div>
                            <div class="step-box-text-two">
                                <h3>Servicios Locales</h3>
                                <p>Disponibilidad para viajes dentro de Lalín, con opciones rápidas y seguras para cualquier trayecto.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Traslados a Eventos -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="step-box-text-one">
                                <div class="icon">
                                    <i class="fa-duotone fa-calendar-check fa-3x"></i>
                                </div>
                                <div class="line"><hr></div>
                                <div class="number">03</div>
                            </div>
                            <div class="step-box-text-two">
                                <h3>Traslados a Eventos</h3>
                                <p>Te llevamos a reuniones de trabajo, bodas, bautizos o citas importantes con puntualidad y confort.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Mensajería y Diligencias -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="step-box-text-one">
                                <div class="icon">
                                    <i class="fa-duotone fa-envelope-open-text fa-3x"></i>
                                </div>
                                <div class="line"><hr></div>
                                <div class="number">04</div>
                            </div>
                            <div class="step-box-text-two">
                                <h3>Mensajería y Diligencias</h3>
                                <p>Ofrecemos servicios de mensajería rápida y ejecución de diligencias, como pagos y entregas de documentos.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Servicios 24/7 -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="step-box-text-one">
                                <div class="icon">
                                    <i class="fa-duotone fa-clock fa-3x"></i>
                                </div>
                                <div class="line"><hr></div>
                                <div class="number">05</div>
                            </div>
                            <div class="step-box-text-two">
                                <h3>Servicios 24/7</h3>
                                <p>Disponibles a cualquier hora del día y de la noche, para que siempre puedas contar con nosotros.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Viajes Personalizados -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="step-box-text-one">
                                <div class="icon">
                                    <i class="fa-duotone fa-route fa-3x"></i>
                                </div>
                                <div class="line"><hr></div>
                                <div class="number">06</div>
                            </div>
                            <div class="step-box-text-two">
                                <h3>Viajes Personalizados</h3>
                                <p>Adaptamos el servicio a tus necesidades. Reserva con antelación y planifica tu recorrido.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Viajes Seguros -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="step-box-text-one">
                                <div class="icon">
                                    <i class="fa-duotone fa-car fa-3x"></i>
                                </div>
                                <div class="line"><hr></div>
                                <div class="number">07</div>
                            </div>
                            <div class="step-box-text-two">
                                <h3>Viajes Seguros</h3>
                                <p>Seguridad y confort para personas mayores y niños, con vehículos adaptados y conductores capacitados.</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>


    <section class="testimonial-area pt-120 pb-115 p-relative fix" style="background-image: url(/pages/img/bg/testimonial-bg.png); background-size: cover;background-position: center center;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5>Testimonios de clientes</h5>
                        <h2>
                            Nos movemos con rapidez y precisión.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-active">
                        <!-- Testimonio 1 -->
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <div class="ta-info">
                                    <h6>Margie Dose</h6>
                                    <span>Ejecutiva de Ventas</span>
                                    <img src="/pages/img/bg/testimoninal-star.png" alt="5 estrellas">
                                </div>
                            </div>
                            <p>El servicio de transporte en Lalín fue excepcional. La entrega llegó antes de lo esperado y con toda la seguridad. ¡Recomendado para envíos urgentes en Pontevedra!</p>
                        </div>

                        <!-- Testimonio 2 -->
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <div class="ta-info">
                                    <h6>Juan Pérez</h6>
                                    <span>Gerente Logístico</span>
                                    <img src="/pages/img/bg/testimoninal-star.png" alt="5 estrellas">
                                </div>
                            </div>
                            <p>Confío plenamente en este servicio de transporte 24 horas. Siempre cumplen con puntualidad y profesionalismo en Lalín y otras zonas de Pontevedra.</p>
                        </div>

                        <!-- Testimonio 3 -->
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <div class="ta-info">
                                    <h6>María González</h6>
                                    <span>Dueña de negocio</span>
                                    <img src="/pages/img/bg/testimoninal-star.png" alt="5 estrellas">
                                </div>
                            </div>
                            <p>Gracias a su rapidez y precisión, puedo gestionar mis pedidos en Lalín sin preocupaciones. Su equipo es amable y eficiente. ¡Un servicio excelente!</p>
                        </div>

                        <!-- Testimonio 4 -->
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <div class="ta-info">
                                    <h6>Carlos Fernández</h6>
                                    <span>Director de Proyectos</span>
                                    <img src="/pages/img/bg/testimoninal-star.png" alt="5 estrellas">
                                </div>
                            </div>
                            <p>Siempre que necesito transporte urgente en Lalín, este servicio es mi primera opción. Calidad, puntualidad y precios competitivos, ¡todo lo que busco!</p>
                        </div>

                        <!-- Testimonio 5 -->
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <div class="ta-info">
                                    <h6>Lucía Rodríguez</h6>
                                    <span>Emprendedora</span>
                                    <img src="/pages/img/bg/testimoninal-star.png" alt="5 estrellas">
                                </div>
                            </div>
                            <p>La cobertura en Lalín y sus alrededores es insuperable. Este servicio de transporte ha sido clave para mi negocio. ¡Siempre confiable!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include ('pages.partials.call')

@endsection
