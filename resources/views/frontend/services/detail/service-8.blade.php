@extends('frontend.layouts.main')

@section('title', 'Render de planos')

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
                    <i class="fas fa-layer-group me-1"></i> Render de planos
                </li>

            </ol>

        </div>

        <br><br>

        <div class="row align-items-start gy-4">

            <!-- Header -->
            <div class="col-12 d-flex align-items-center mb-3">

                <span class="service-icon-circle me-3">
                    <i class="fa fa-layer-group"></i>
                </span>

                <div>
                    <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Render de planos</span>
                    <h1 class="fw-bold mb-0 color-primary">Render de planos</h1>
                </div>
            </div>

            <!-- Descripción general -->
            <div class="col-lg-7">
                
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios de renderizado de planos para transformar tus dibujos técnicos 2D en visualizaciones 3D fotorrealistas. 
                        Nuestro equipo utiliza software avanzado para crear imágenes detalladas que permiten a arquitectos, diseñadores y clientes visualizar proyectos antes de su construcción, 
                        facilitando la toma de decisiones y mejorando la presentación de tus ideas.
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Modelado 3D a partir de planos 2D.</li>
                        <li>Texturización y aplicación de materiales realistas.</li>
                        <li>Iluminación avanzada para mejorar la percepción del espacio.</li>
                        <li>Renderizado fotorrealista en alta resolución.</li>
                        <li>Revisiones y ajustes según tus necesidades.</li>
                    </ul>
                </div>

                <!-- Ideal para -->
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal para</h3>
                    <p>
                        Arquitectos, diseñadores de interiores, desarrolladores inmobiliarios y cualquier profesional que necesite presentar proyectos de manera visualmente atractiva y comprensible
                        a partir de planos técnicos 2D, mejorando la comunicación con clientes e inversores.
                    </p>

                </div>


            </div>

            <div class="col-lg-5">

                <!-- entregables -->
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Modelos 3D fotorrealistas en formatos JPEG, PNG o TIFF.</li>
                        <li>Animaciones y recorridos virtuales (opcional).</li>
                        <li>Archivos editables del proyecto en formatos compatibles con software de diseño 3D.</li>
                    </ul>
                </div>

                <!-- Beneficios clave -->    
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios clave</h3>
                    <ul>
                        <li>Convierte planos 2D en imágenes 3D detalladas.</li>
                        <li>Facilita la comprensión del proyecto entre todas las partes involucradas.</li>
                        <li>Permite identificar y corregir posibles problemas antes de la construcción.</li>
                        <li>Mejora la presentación de proyectos a clientes e inversores.</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Interesado?</h3>
                    <p>
                        Para solicitar este servicio, por favor diligencia el formulario a continuación y
                        uno de nuestros asesores se pondrá en contacto contigo a la brevedad.
                    </p>
                    <a href="#contact" class="btn-gradient-service w-100 mt-2 d-flex align-items-center justify-content-center">
                        Hablemos de tu proyecto <span class="ms-2">→</span>
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- botón flotante whatsapp -->
    <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($message) }}"
        id="whatsapp-button"
        target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

@endsection