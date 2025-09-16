@extends('frontend.layouts.main')

@section('title', 'Delineado AutoCAD')

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
                    <i class="fas fa-ruler-combined me-1"></i> Delineado AutoCAD
                </li>

            </ol>
        </div>

        <br><br>

        <div class="row align-items-start gy-4">

            <!-- Header -->
            <div class="col-12 d-flex align-items-center mb-3">

                <span class="service-icon-circle me-3">
                    <i class="fa fa-ruler-combined"></i>
                </span>

                <div>
                    <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Delineado AutoCAD</span>
                    <h1 class="fw-bold mb-0 color-primary" style="font-size:2.7rem;">Delineado AutoCAD</h1>
                </div>
            </div>

            <!-- Descripción general -->
            <div class="col-lg-7">
                
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios profesionales de delineado en AutoCAD para transformar tus ideas y bocetos en planos técnicos 2D precisos y organizados. 
                        Nuestro equipo de expertos utiliza las últimas herramientas y técnicas de AutoCAD para crear dibujos detallados que cumplen con los estándares de la industria, 
                        facilitando la comunicación y colaboración en tus proyectos de arquitectura, ingeniería o diseño.
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Precisión y detalle: Nuestros delineantes son expertos en AutoCAD y se aseguran de que cada línea, dimensión y anotación sea exacta.</li>
                        <li>Personalización: Adaptamos nuestros servicios a tus necesidades específicas, ya sea para proyectos residenciales, comerciales o industriales.</li>
                        <li>Entrega rápida: Entendemos la importancia de los plazos en los proyectos, por lo que nos comprometemos a entregar tus planos a tiempo.</li>
                        <li>Soporte continuo: Ofrecemos asistencia post-entrega para cualquier ajuste o modificación que puedas necesitar.</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal para</h3>
                    <p> 
                        Arquitectos, ingenieros, diseñadores y profesionales de la construcción que necesitan planos técnicos detallados y precisos para sus proyectos.
                    </p>
                </div>

            </div>

            <div class="col-lg-5">
                
                <!-- entregables -->
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Planos técnicos 2D en formato DWG o PDF.</li>
                        <li>Documentación adicional según sea necesario (listas de materiales, especificaciones, etc.).</li>
                        <li>Soporte para revisiones y modificaciones post-entrega.</li>
                    </ul>
                </div>

                <!-- Beneficios clave -->
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios clave</h3>
                    <ul>
                        <li>Mejora la comunicación y colaboración en tus proyectos.</li>
                        <li>Asegura la precisión y calidad de tus planos técnicos.</li>
                        <li>Optimiza el tiempo y recursos en la fase de diseño.</li>
                        <li>Facilita la obtención de permisos y aprobaciones necesarias.</li>
                        <li>Incrementa la satisfacción del cliente al entregar resultados de alta calidad.</li>
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