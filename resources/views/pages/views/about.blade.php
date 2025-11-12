@extends('layouts.pages')

@section('title', 'Sobre nosotros')

@section('content')

    <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/pages/img/bg/bdrc-bg.png)">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sobre nosotros</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Sobre nosotros</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section class="about-area about-p pt-60 pb-60 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInUp animated " data-animation="fadeInUp" data-delay=".4s">
                    <div class="about-title second-title pb-25">
                        <h5> SOBRE NOSOTROS</h5>
                        <h2>Servicio de taxi para cada necesidad </h2>
                    </div>
                    <p>Traslados confiables para cada ocasión: desde tu hogar a cualquier lugar que necesites.  Descubre  servicios, diseñados para tu comodidad.. </p>

                    <p>Me enorgullece ofrecerte una variedad de opciones diseñadas para satisfacer todas tus necesidades de transporte. Ya sea que necesites un traslado rápido, hacer una diligencia o contar con un servicio especializado para personas mayores y niños, estoy aquí para garantizarte un viaje cómodo, seguro y puntual. A continuación, te presento los servicios disponibles para ti:" </p>

                    <div class="row align-items-center mt-30">
                        <!-- Traslados a Aeropuertos -->
                        <div class="col-lg-6 col-md-12">
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
                        <div class="col-lg-6 col-md-12">
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
                        <div class="col-lg-6 col-md-12">
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
                        <div class="col-lg-6 col-md-12">
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
                        <div class="col-lg-6 col-md-12">
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
                        <div class="col-lg-6 col-md-12">
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
                        <div class="col-lg-6 col-md-12">
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
            </div>

        </div>

    </div>
</section>


  @include ('pages.partials.call')


@endsection
