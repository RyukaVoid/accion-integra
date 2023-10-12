@extends('layout.master')
@section('title', 'Inicio')
@section('content')
    {{-- variables --}}
    @php
        $social_urls = [
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'twitter' => 'https://twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'linkedin' => 'https://www.linkedin.com/',
        ];
    @endphp

<div class="row mb-5" style="margin-top:83px;">
    <div class="col-12 p-0">
        <div id="carouselExampleControls" class="carousel slide mx-auto" style="max-width:1300px;" data-bs-ride="carousel" data-interval="false">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="container text-op-6" id="home">

        <div class="row my-5" id="about-us">
            <div class="col-12 info-section text-center" style="padding: 40px; max-width:1300px;margin:auto">
                <h1 class="mb-6">Acción integra es una corporación social sin fines de lucro</h1>
                <p class="mb-6">
                    Estamos enfocados en prestar ayuda a las personas con trastorno espectro autista y a su grupo de apoyo. Las ayudas son
                    principalmente en el área del aprendizaje para procurar que todos los ámbitos de sus vidas sean integrados adecuadamente en pro de su
                    desarrollo e independencia, tomando enfoques nuevos de acuerdo con el aprendizaje general que se logre de la discapacidad.
                </p>
                <p class="mb-7">
                    Entregar apoyo integral es nuestra prioridad con la experiencia de otras familias que llevan tiempo en este entorno, complementando
                    conocimiento con experiencia.
                </p>
            </div>
        </div>

        <div class="row text-white-6 my-16 areas-bg pa-15 shadow rounded">
            <div class="col-lg-4 col-md-6 text-center">
                <em class="fa-solid fa-users fa-4x mb-9"></em>
                <h4 class="mb-9">Área capacitación a grupo de apoyo</h4>
                <p>
                    Capacitaciones con profesionales
                    especialistas en áreas como educación
                    sexual, vida social o autoregulación.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <em class="fa-solid fa-hands fa-4x mb-9"></em>
                <h4 class="mb-9">Área de terapia adicional para el individuo</h4>
                <p>
                    Terapias como fonoaudiología,
                    ocupacional. Terapias alternativas de
                    música, arte, jardineria, entre otros.
                </p>
            </div>
            <div class="col-lg-4 col-md-12 text-center">
                <em class="fa-solid fa-graduation-cap fa-4x mb-9"></em>
                <h4 class="mb-9">Área de educación general</h4>
                <p>
                    Educación general especial enfocada en el
                    descubrimiento de habilidades para la vida
                    adulta.
                </p>
            </div>
        </div>

        <div class="row mb-16">
            <div class="col-12 text-center" style="padding: 40px;max-width:1300px;margin:auto;">
                <h1 class="mb-6">Plantéate. Una educación e inclusión sociolaboral</h1>
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

        <div class="row align-items-center text-white-6 my-16 areas-bg pa-15 rounded shadow" id="join-us">
            @if( Session::has('status') )
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('status') }}</strong>
                    </div>
                </div>
            @endif
            <div class="col-lg-8 px-lg-5">
                <h3 class="mb-4 px-2">Ponte en contacto con nosotros.</h3>
                <form action="{{ route('contactanos') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="mb-4 col-lg-6">
                            <label for="nombre">nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" required placeholder="Nombre">
                        </div>
                        <div class="mb-4 col-lg-6">
                            <label for="email">Correo</label>
                            <input type="email" name="email" class="form-control" id="email" required placeholder="Correo">
                        </div>
                        <div class="mb-4">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" class="form-control" id="mensaje" rows="6" placeholder="Mensaje (opcional)"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary w-100">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 d-none d-lg-block form-bg text-center">
                <img style="max-width:400px" src="{{asset('images/form-image.jfif')}}" alt="">
            </div>
        </div>

        <div class="row my-16">
            <div class="col-12">
                <h1 class="mb-4">Siguenos y enterate de nuestras noticias.</h4>
            </div>
            <div class="col text-center">
                <a href="https://www.facebook.com/CorporacionAccionIntegra/" class="facebook d-flex align-items-center text-h6 text-decoration-none" target="_blank">
                    <em class="fa-brands fa-facebook mr-4 fa-2x"></em>
                    <strong>corporacionaccionintegra</strong>
                </a>
            </div>
            <div class="col">
                <a href="https://www.instagram.com/accionintegra/" class="instagram d-flex align-items-center text-h6 text-decoration-none" target="_blank">
                    <em class="fa-brands fa-instagram mr-4 fa-2x"></em>
                    <strong>@accionintegra</strong>
                </a>
            </div>
            <div class="col">
                <a href="https://www.youtube.com/channel/UCu6iAqooqVecrQEw3jZ5XEA" class="youtube d-flex align-items-center text-h6 text-decoration-none" target="_blank">
                    <em class="fa-brands fa-youtube mr-4 fa-2x"></em>
                    <strong>corporacionaccionintegra8868</strong>
                </a>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="row p-3">
            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap px-12" style="max-width: 1300px; margin:auto">
                <img width="195" src="{{ asset('images/logo.png') }}" class="mr-5" alt="logo">
                <div>
                    <a href="mailto:contacto@accionintegra.org" class="text-white text-decoration-none">
                        <em class="fa-brands fa-facebook mr-4"></em>
                    </a>
                    <a href="mailto:contacto@accionintegra.org" class="text-white text-decoration-none">
                        <em class="fa-brands fa-instagram mr-4"></em>
                    </a>
                    <a href="mailto:contacto@accionintegra.org" class="text-white text-decoration-none">
                        <em class="fa-brands fa-youtube mr-4"></em>
                    </a>
                    <a href="mailto:contacto@accionintegra.org" class="text-white text-decoration-none">
                        <em class="fa fa-envelope mr-4"></em>
                    </a>
                </div>
            </div>
        </div>
        <div class="row p-0" style="background: rgb(16, 18, 32)">
            <div class="col-12 d-flex justify-content-center">
                <span class="text-center">© 2023 Copyright: accionintegra.org </span>
            </div>
        </div>
    </footer>
@endsection
