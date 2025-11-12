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
                                <li class="breadcrumb-item active" aria-current="page">Preguntas frecuentes</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Tienes alguna duda respecto a nuestro servicio.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-area pt-60 pb-120 p-relative fix">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="section-title wow fadeInUp animated " data-animation="fadeInUp" data-delay=".4s">
                        <p>Encuentra toda la información que necesitas para aprovechar al máximo nuestros servicios y soluciones.</p>
                    </div>
                    <div class="faq-wrap mt-30 pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="accordion" id="faqAccordion">
                            <!-- Pregunta 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ¿Aceptan pago con tarjeta?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Sí, todos nuestros vehículos están equipados para aceptar pagos con tarjeta de crédito o débito, para tu mayor comodidad.
                                    </div>
                                </div>
                            </div>
                            <!-- Pregunta 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Ofrecen servicios de mensajería o diligencias?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Sí, también ofrecemos servicios de mensajería y realización de diligencias, como entregas de documentos, compras y otros encargos rápidos.
                                    </div>
                                </div>
                            </div>
                            <!-- Pregunta 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Puedo solicitar un taxi para ir al aeropuerto?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Claro, ofrecemos traslados al aeropuerto. Solo debes indicarnos la hora de recogida y el destino, y nos encargamos del resto.
                                    </div>
                                </div>
                            </div>
                            <!-- Pregunta 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        ¿Puedo hacer una reserva con antelación?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Sí, puedes reservar un taxi con antelación para cualquier tipo de viaje. Solo contáctanos a través de nuestra página web o por teléfono para realizar la reserva.
                                    </div>
                                </div>
                            </div>
                            <!-- Pregunta 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        ¿Puedo cambiar mi destino una vez iniciado el viaje?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Sí, puedes modificar tu destino en cualquier momento durante el viaje. Solo asegúrate de informar al conductor para que pueda ajustar la ruta.
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
