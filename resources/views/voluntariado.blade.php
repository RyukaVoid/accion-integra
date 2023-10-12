@extends('layout.master')

@section('title', 'Voluntariado')

@section('content')

    <div class="container">
        <div class="row my-16">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="false">
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
    </div>
    <section class="section-4" id="voluntariado">
        <form action="{{ route('hazteSocio') }}" method="POST" class="form-container form-style">
            @method('POST')
            @csrf
            <div class="form-bg d-none d-lg-block">
                <img src="{{asset('images/form-image.jfif')}}" alt="corporation">
            </div>
            <div class="form-content">
                <h4 class="mb-4">Hazte socio</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="">Nombre</label>
                            <input type="text" placeholder="Ingrese nombre" class="form-control" id="nombresocio" name="nombre" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                </div>
            </div>
        </form>
    </section>
@endsection
