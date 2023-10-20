{{-- navbar --}}
<nav class="nav-transparent">
    <div class="nav-wrapper">
        <a href="{{ route('home') }}#home" class="navbar-brand">
            <span>Acción Integra</span>
            <img src="{{ asset('images/logo_notext.png') }}" class="logo-brand" alt="logo" class="logo">
        </a>

        <div id="navbar-menu" class="menu">
            <a href="{{ route('home') }}#about-us">QUIENES SOMOS</a>
            <a href="{{ route('home') }}#join-us">HAZTE SOCIO</a>
            <a href="{{ route('voluntariado') }}">VOLUNTARIADO</a>
            {{-- <a href="{{ route('tiendita') }}">Tienda</a>
            <a href="#taller">Nuestros talleres</a> --}}
        </div>


        <button type="button" id="toggle-navbar" class="btn btn-primary btn-sm hamburger">
            <em class="fa fa-bars"></em>
        </button>
    </div>
</nav>
