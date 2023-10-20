{{-- variables --}}
@php
$social_urls = [
    'facebook' => 'https://www.facebook.com/CorporacionAccionIntegra/',
    'instagram' => 'https://www.instagram.com/accionintegra/',
    'twitter' => 'https://twitter.com/',
    'youtube' => 'https://www.youtube.com/channel/UCu6iAqooqVecrQEw3jZ5XEA/',
    'linkedin' => 'https://www.linkedin.com/',
    'email' => 'mailto:contacto@accionintegra.org'
];
@endphp
@extends('layout.master')
@section('title', 'Inicio')
@section('content')
    <div class="row py-5" style="margin-top: 96px;background: #033F62;">
        <div class="col-12 p-0">
            <div id="carouselExampleControls" class="carousel slide mx-auto" style="max-width:1300px;"
                data-bs-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/carousel-home/1.png') }}" class="d-block w-100" alt="fondo1">
                        <div class="carousel-btn">
                            {{-- <button class="btn btn-primary">Donaciones</button> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel-home/2.png') }}" class="d-block w-100" alt="fondo1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel-home/3.png') }}" class="d-block w-100" alt="fondo1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel-home/4.png') }}" class="d-block w-100" alt="fondo1">
                        <div class="carousel-content">
                            tienda
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="wave-container-top"></div>

        
        <div
            class="
                row
                font-size-large
                animate__animated animate__fadeInUp
            "
            style="margin: 6.25rem 0px; color:#616161 !important"
            id="about-us"
        >
            <div class="col-12 info-section text-center" style="padding: 40px; max-width:1300px;margin:auto">
                <h2 class="mb-6 fw-bolder">Acción integra es una corporación social sin fines de lucro</h2>
                <p class="mb-6">
                    Estamos enfocados en prestar ayuda a las personas con trastorno espectro autista
                    y a su grupo de apoyo. Las ayudas son principalmente en el área del aprendizaje
                    para procurar que todos los ámbitos de sus vidas sean integrados adecuadamente en pro de su
                    desarrollo e independencia, tomando enfoques nuevos de acuerdo con el aprendizaje
                    general que se logre de la discapacidad.
                </p>
                <p class="mb-7">
                    Entregar apoyo integral es nuestra prioridad con la experiencia
                    de otras familias que llevan tiempo en este entorno, complementando
                    conocimiento con experiencia.
                </p>
            </div>
        </div>

        <div class="divider-top"></div>
        <div
            class="
                row
                justify-center
                text-white-6
                areas-bg
                pa-15
                shadow
                m-0
            "
        >
            <div
                class="row"
                style="max-width: 1300px"

            >
                <div class="col-lg-4 col-md-6 text-center animate__animated animate__zoomIn">
                    <em class="fa-solid fa-users fa-4x mb-9"></em>
                    <h4 class="mb-9">Área capacitación a grupo de apoyo</h4>
                    <p>
                        Capacitaciones con profesionales
                        especialistas en áreas como educación
                        sexual, vida social o autoregulación.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center animate__animated animate__zoomIn">
                    <em class="fa-solid fa-hands fa-4x mb-9"></em>
                    <h4 class="mb-9">Área de terapia adicional para el individuo</h4>
                    <p>
                        Terapias como fonoaudiología,
                        ocupacional. Terapias alternativas de
                        música, arte, jardineria, entre otros.
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 text-center animate__animated animate__zoomIn">
                    <em class="fa-solid fa-graduation-cap fa-4x mb-9"></em>
                    <h4 class="mb-9">Área de educación general</h4>
                    <p>
                        Educación general especial enfocada en el
                        descubrimiento de habilidades para la vida
                        adulta.
                    </p>
                </div>
            </div>
        </div>
        <div class="divider-bottom"></div>

        <div class="row font-size-large animate__animated animate__fadeInUp" style="margin: 6.25rem 0px;">
            <div class="col-12 text-center" style="padding: 40px;max-width:1300px;margin:auto; color:#616161 !important">
                <h2 class="mb-6 fw-bolder">Plantéate. Una educación e inclusión sociolaboral</h1>
                <p class="mb-6">
                    Actualmente desarrollamos talleres online tanto terapéuticos como de desarrollo
                    personal y proponemos complementar la educación curricular con distintos
                    talleres tales como, actividades que incluyen lenguaje y matemáticas
                    con adaptaciones curriculares utilizando metodología del sistema de
                    comunicación, potenciando el desarrollo sensorial motriz como también el
                    sexual emocional, fomentando el uso de tics y la autonomía e
                    independencia a vías pragmáticas y sociales, reducción de
                    alimentos, arte y pintura, elaboración de material didáctico,
                    empaque y despacho, y el manejo de dinero, esto mediante el
                    trabajo colaborativo con el equipo de la familia para potenciar
                    el desarrollo integral y la inclusión social de la persona con autismo.
                </p>
            </div>
        </div>

        {{-- <div class="row">
            <h4 class="text-center">Noticias</h4>
        </div> --}}

        <div class="container mb-5">
            <div
                class="
                    row
                    animate__animated
                    animate__fadeIn
                    text-black
                "
                style="
                    box-shadow: rgba(0, 0, 0, 0.2) 3px 3px 9px 2px;
                    border-radius:5px
                "
                id="join-us"
            >
            <form action="{{ route('contactanos') }}" method="POST" style="padding: 0">
                @method('POST')
                @csrf
                @if (Session::has('status'))
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('status') }}</strong>
                        </div>
                    </div>
                @endif
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 col-md-4 form-bg"
                            style="min-height: 215px"
                        ></div>
                        <div class="col-12 col-md-8 px-lg-5">
                            <h3 class="mb-4 px-2">Ponte en contacto con nosotros.</h3>
                            
                                <div class="row">
                                    <div class="mb-4 col-lg-6">
                                        <label for="nombre">nombre</label>
                                        <input type="text" name="nombre" class="form-control" id="nombre" required
                                            placeholder="Nombre">
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <label for="email">Correo</label>
                                        <input type="email" name="email" class="form-control" id="email" required
                                            placeholder="Correo">
                                    </div>
                                    <div class="mb-4">
                                        <label for="mensaje">Mensaje</label>
                                        <textarea
                                            name="mensaje"
                                            class="form-control"
                                            id="mensaje" rows="6"
                                            placeholder="Mensaje (opcional)"
                                            style="resize: none"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary w-100 text-white">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row my-16">
                <div class="col-12 text-center">
                    <h1 class="mb-4" style="color:#616161 !important">¡Siguenos! y enterate de nuestras noticias.</h4>
                </div>
    
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card social-card animate__animated animate__fadeInLeft">
                        <div class="card-body text-center">
                            <em class="fa-brands facebook fa-facebook my-6 fa-4x"></em>
    
                            <h5 class="card-title fw-bolder">Facebook</h5>
                            <p class="card-text">
                            Siguienos en Facebook para estar enterado de nuestras próximas actividades
                            </p>
                          <a href="{{ $social_urls['facebook'] }}" class="btn btn-tertiary">Síguenos</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card social-card animate__animated animate__fadeInLeft">
                        <div class="card-body text-center">
                            <em class="fa-brands instagram fa-instagram my-6 fa-4x"></em>
    
                            <h5 class="card-title fw-bolder">Instagram</h5>
                            <p class="card-text">
                            Siguienos en Instagram conocer más de nosotros y de nuestras actividades
                            </p>
                          <a href="{{ $social_urls['instagram'] }}" class="btn btn-tertiary">Visitanos</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card social-card animate__animated animate__fadeInRight">
                        <div class="card-body text-center">
                            <em class="fa-brands youtube fa-youtube my-6 fa-4x"></em>
    
                            <h5 class="card-title fw-bolder">Youtube</h5>
                            <p class="card-text">
                            Suscribete a nuestro Youtube para ver nuestros videos y actividades
                            </p>
                          <a href="{{ $social_urls['youtube'] }}" class="btn btn-tertiary">Suscribete</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card social-card animate__animated animate__fadeInRight">
                        <div class="card-body text-center">
                            <em class="fa fa-envelope my-6 fa-4x"></em>
    
                            <h5 class="card-title fw-bolder">Correo</h5>
                            <p class="card-text">
                                Escribenos un correo por si deseas contactarnos o por si tienes alguna duda
                            </p>
                          <a href="{{ $social_urls['email'] }}" class="btn btn-tertiary">Escribenos</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
@endsection
