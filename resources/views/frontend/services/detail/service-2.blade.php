@extends('frontend.layouts.main')

@section('title', 'Fotografia Profesional')

@section('content')

    <section class="container py-5">

        <!-- Miga de pan -->
        <div class="breadcrumbs my-3 slide-right-anim">

            <ol class="breadcrumb bg-light rounded-4 px-3 p-3 fw-bold">

                <li class="breadcrumb-item ms-3">
                    <a href="/" class="text-decoration-none">
                        <i class="fas fa-home me-1"></i> Inicio
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ url('/?=#services') }}" class="text-decoration-none">    
                        <i class="fas fa-briefcase me-1"></i> Servicios
                    </a>
                </li>

                <li class="breadcrumb-item active color-primary" aria-current="page">
                    <i class="fas fa-camera me-1"></i> Fotografia Profesional
                </li>

            </ol>

        </div>

        <br><br>

        <div class="row align-items-start gy-4">

            <!-- Header -->
            <div class="col-12 d-flex align-items-center mb-3">
                <span class="service-icon-circle me-3">
                    <i class="fa fa-camera"></i>
                </span>
                <div>
                    <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Fotografía Profesional</span>
                    <h1 class="fw-bold mb-0 color-primary" style="font-size:2.7rem;">Fotografía Profesional</h1>
                </div>
            </div>

            <!-- Descripción general -->
            <div class="col-lg-7">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios de fotografía profesional para una amplia gama de necesidades. 
                        Cubrimos eventos corporativos y sociales, realizamos sesiones de fotografía 
                        de producto para e-commerce y catálogos, y creamos retratos profesionales 
                        para perfiles y uso corporativo. Utilizamos equipo de alta gama y técnicas 
                        de iluminación avanzadas para asegurar imágenes impactantes y de calidad superior.
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Planificación detallada de la sesión fotográfica</li>
                        <li>Cobertura fotográfica en localización o estudio con equipo profesional</li>
                        <li>Selección y curación de las mejores imágenes</li>
                        <li>Retoque y edición profesional avanzada (color, contraste, limpieza)</li>
                        <li>Entrega de fotografías en alta resolución y formatos optimizados para web</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal Para</h3>
                    <p>
                        Empresas, emprendedores, tiendas online, organizadores de eventos, 
                        agencias de publicidad y particulares 
                        que necesiten fotografía de alta calidad para diversos fines.
                    </p>
                </div>

            </div>

            <div class="col-lg-5">

                <div class="service-detail-card mb-4">

                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Galería online privada con las fotografías seleccionadas</li>
                        <li>Archivos digitales en alta resolución (JPG/TIFF)</li>
                        <li>Archivos optimizados para uso web y redes sociales</li>
                        <li>Licencia de uso según acuerdo</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios Clave</h3>
                    <ul>
                        <li>Imágenes de alta calidad que realzan su marca, producto o evento</li>
                        <li>Material visual atractivo y profesional para marketing y comunicación</li>
                        <li>Consistencia visual en todos sus canales</li>
                        <li>Recuerdos duraderos y de calidad de momentos importantes</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Interesado?</h3>
                    <p>Contáctanos para obtener una propuesta personalizada para tu proyecto.</p>
                    <a href="#contact" class="btn-gradient-service w-100 mt-2 d-flex align-items-center justify-content-center">
                        Consulta sin compromiso <span class="ms-2">→</span>
                    </a>
                </div>

            </div>

        </div>


        <!-- botón flotante whatsapp -->
        <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($message) }}"
            id="whatsapp-button"
            target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>

    </section>

@endsection