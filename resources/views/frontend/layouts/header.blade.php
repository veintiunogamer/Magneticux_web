<header class="fixed-header" id="mainHeader">

    <nav class="navbar navbar-expand-lg py-3">

        <div class="container">

            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
                <span style="font-size: 2rem; font-weight: bold; color: #fff;">Magnetic</span><span style="font-size: 2rem; font-weight: bold; color: #6ec1e4;">UX</span>
            </a>

            <button class="navbar-toggler btn-gradient-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto gap-3 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-white" href="#aboutUs">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-white" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-white" href="#equipo">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-white" href="#contact">Contacto</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="btn-gradient fw-bold ms-lg-3 mt-3 mt-lg-0 text-white">Comienza tu proyecto</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>

<script>
    window.addEventListener('scroll', function() {
        const header = document.getElementById('mainHeader');
        if(window.scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>