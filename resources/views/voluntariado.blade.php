@extends('layout.master')

@section('title', 'Voluntariado')

@section('content')

    <div class="row py-5" style="margin-top: 96px;background: #033F62;">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide mx-auto" data-bs-ride="carousel" data-interval="false" style="max-width: 1300px">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/carousel-voluntariado/1.jpeg') }}" class="d-block w-100 max-heigth-carousel"
                            alt="fondo1">
                    </div>
                    {{-- <div class="carousel-item">
                        <img src="{{ asset('images/carousel-voluntariado/2.jpeg') }}" class="d-block w-100 max-heigth-carousel"
                            alt="fondo2">
                    </div> --}}
                    {{-- <div class="carousel-item">
                        <img src="{{ asset('images/carousel-voluntariado/3.jpeg') }}" class="d-block w-100 max-heigth-carousel"
                            alt="fondo3">
                    </div> --}}
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel-voluntariado/4.jpeg') }}" class="d-block w-100 max-heigth-carousel"
                            alt="fondo4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel-voluntariado/5.jpeg') }}" class="d-block w-100 max-heigth-carousel"
                            alt="fondo5">
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
        <h2 class="mb-6 fw-bolder">Tu Compromiso, Nuestra Fuerza: Sé un Voluntario en Acción Integra</h2>
        <p class="mb-6">
            En Acción Integra, creemos que el poder de la colaboración y el compromiso
            voluntario puede marcar la diferencia en la vida de las personas con trastorno
            del espectro autista y sus grupos de apoyo. Si compartes nuestra pasión
            por ayudar a construir un mundo más inclusivo y apoyar el desarrollo y la
            independencia de estas personas, te invitamos a unirte a nuestro equipo de
            voluntarios.
        </p>
        <p class="mb-7">
            Nuestro trabajo se basa en la experiencia y el conocimiento,
            y al colaborar con nosotros, tendrás la oportunidad de marcar un impacto
            significativo en la vida de aquellos que necesitan nuestro apoyo.
            Sea que tengas experiencia en el campo o simplemente un corazón dispuesto a aprender,
            tu contribución es valiosa. Únete a Acción Integra y juntos,
            construyamos un futuro más inclusivo y esperanzador.
        </p>
    </div>
</div>

<div class="container mb-5">
    <div
        class="row"
        style="
            box-shadow: rgba(0, 0, 0, 0.2) 3px 3px 9px 2px;
            border-radius:5px
        "
    >
        <form action="{{ route('hazteSocio') }}" method="POST" style="padding: 0">
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
                    <div class="col-sm-12 col-md-4 form-bg" style="min-height: 215px">
                    </div>
                
                    <div class="col-sm-12 col-md-8 pa-5">
                        <h4 class="mb-4">Hazte socio</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="">Nombre</label>
                                    <input type="text" placeholder="Ingrese nombre" class="form-control" id="nombresocio" name="nombre" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="">Correo</label>
                                    <input type="email" placeholder="ejemplo@dominio.cl" class="form-control" id="emailsocio" name="email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Mensaje</label>
                                    <textarea class="form-control" placeholder="Mensaje (opcional)" id="mensajesocio" name="mensaje" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-end w-100">
                            <button type="submit" style="color:white" class="btn btn-primary mt-2 w-100">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
