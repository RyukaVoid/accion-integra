@extends('layout.master')
@section('title', 'Diego Ramirez')
@section('content')
    <div class="progress-bar" id="progress-bar"></div>
    {{-- Seccion 1 --}}
    <section class="section-1" id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/header.jpg') }}" class="d-block w-100" alt="fondo1">
                <div class="carousel-btn">
                    <button class="btn-primary">Donaciones</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/header.jpg') }}" class="d-block w-100" alt="fondo1">
                <div class="carousel-content">
                    talleres texto
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/header.jpg') }}" class="d-block w-100" alt="fondo1">
                <div class="carousel-content">
                    nuestra corporación
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/header.jpg') }}" class="d-block w-100" alt="fondo1">
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
    </section>
    <section class="section-2" id="about-us">
        <div class="info">
            <h1>Acción integra es una corporación social sin fines de lucro</h1>
            <p>
                Estamos enfocados en prestar ayuda a las personas con trastorno espectro autista y a su grupo de apoyo. Las ayudas son
                principalmente en el área del aprendizaje para procurar que todos los ámbitos de sus vidas sean integrados adecuadamente en pro de su
                desarrollo e independencia, tomando enfoques nuevos de acuerdo con el aprendizaje general que se logre de la discapacidad.
            </p>
            <p>
                Entregar apoyo integral es nuestra prioridad con la experiencia de otras familias que llevan tiempo en este entorno, complementando
                conocimiento con experiencia.
            </p>
        </div>

        <div class="areas">
            <div>
                <i class="fa-solid fa-users fa-4x"></i>
                <h4>Área capacitación a grupo de apoyo</h4>
                <p>
                    Capacitaciones con profesionales
                    especialistas en áreas como educación
                    sexual, vida social o autoregulación.
                </p>
            </div>
            <div>
                <i class="fa-solid fa-hands fa-4x"></i>
                <h4>Área de terapia adicional para el individuo</h4>
                <p>
                    Terapias como fonoaudiología,
                    ocupacional. Terapias alternativas de
                    música, arte, jardineria, entre otros.
                </p>
            </div>
            <div>
                <i class="fa-solid fa-graduation-cap fa-4x"></i>
                <h4>Área de educación general</h4>
                <p>
                    Educación general especial enfocada en el
                    descubrimiento de habilidades para la vida
                    adulta.
                </p>
            </div>
        </div>
    </section>
    <section class="section-3" id="mision">
        Noticias
    </section>
    <section class="section-4" id="join-us">
        <form action="" class="form-container form-style">
            <div class="form-bg d-none d-lg-block">
                <img src="https://i.pinimg.com/originals/2e/c6/b5/2ec6b5e14fe0cba0cb0aa5d2caeeccc6.jpg" alt="corporation">
            </div>
            <div class="form-content">
                <h4 class="mb-4">Hazte socio</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="">Nombre</label>
                            <input type="text" placeholder="Ingrese nombre" class="form-control" id="" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="">Correo</label>
                            <input type="email" class="form-control" id="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="">Mensaje</label>
                            <textarea class="form-control" id="" rows="6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-end w-100">
                    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                </div>
            </div>
        </form>
    </section>
    <section class="section-5" id="conclusion">
        siguenos
    </section>
    <section class="section-6" id="contact">
        Contáctanos
    </section>
    <footer id="footer">Footer</footer>
@endsection

@section('js')
    <script src="{{ asset('js/progress-bar.js') }}"></script>
@endsection
