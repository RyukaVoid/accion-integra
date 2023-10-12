{{-- navbar --}}
<nav class="nav-transparent">
    <div class="nav-wrapper">
        <a href="{{ route('home') }}#home" class="navbar-brand">
            Acción Integra
            <img src="{{ asset('images/logo_notext.png') }}" class="logo-brand" alt="logo" class="logo">
        </a>

        <div class="menu">
            <a href="{{ route('home') }}#about-us">Quienes somos</a>
            <a href="{{ route('voluntariado') }}">Voluntariado</a>
            {{-- <a href="{{ route('tiendita') }}">Tienda</a>
            <a href="#taller">Nuestros talleres</a> --}}
            <a href="{{ route('home') }}#join-us">Hazte socio</a>
        </div>

        <button class="hamburger">

        </button>
    </div>
</nav>
