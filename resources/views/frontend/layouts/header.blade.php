<header class="sticky-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold" href="{{ url('/home') }}">
                Enfoque 21
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ url('home') }}">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('services') || request()->routeIs('servicio.detalle') ? 'active' : '' }}" href="{{ url('services') }}">Servicios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ url('/') }}">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ url('/') }}">Contacto</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
    
</header>