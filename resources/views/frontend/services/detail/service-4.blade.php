@extends('frontend.layouts.main')

@section('title', 'Branding para Eventos')

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
                    <i class="fas fa-calendar me-1"></i> Branding para Eventos
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <!-- Header -->
        <div class="col-12 d-flex align-items-center mb-3">

            <span class="service-icon-circle me-3">
                <i class="fa fa-calendar"></i>
            </span>

            <div>
                <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Branding para Eventos</span>
                <h1 class="fw-bold mb-0 color-primary" style="font-size:2.7rem;">Branding para Eventos</h1>
            </div>

        </div>

        <div class="row align-items-start gy-4">

            <!-- Descripción general -->
            <div class="col-lg-7">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios de branding para eventos, ayudando a empresas y organizaciones a crear una identidad visual coherente y atractiva para sus conferencias, ferias, lanzamientos de productos y otros eventos especiales. 
                        Nuestro equipo diseña logotipos, materiales promocionales, señalización y elementos gráficos que reflejan la esencia del evento y capturan la atención del público.
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Consultoría inicial para entender los objetivos del evento</li>
                        <li>Diseño de logotipo y paleta de colores</li>
                        <li>Creación de materiales promocionales (flyers, posters, banners)</li>
                        <li>Diseño de señalización y elementos gráficos para el evento</li>
                        <li>Adaptación de la identidad visual a diferentes formatos (digital e impreso)</li>
                        <li>Revisiones y ajustes según feedback del cliente</li>
                        <li>Entrega de archivos en formatos adecuados para impresión y uso digital</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal para</h3>
                    <p>Empresas, organizaciones y agencias que buscan crear una identidad visual fuerte y memorable para sus eventos, asegurando una experiencia cohesiva y profesional para los asistentes.</p>
                </div>

            </div>

            <div class="col-lg-5">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Logotipo del evento en varios formatos (PNG, SVG, JPG)</li>
                        <li>Manual de identidad visual del evento</li>
                        <li>Materiales promocionales listos para impresión y distribución digital</li>
                        <li>Señalización y gráficos para uso durante el evento</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios clave</h3>
                    <ul>
                        <li>Identidad visual coherente que refuerza la marca del evento</li>
                        <li>Materiales atractivos que capturan la atención del público</li>
                        <li>Mejora la experiencia del asistente mediante una señalización clara</li>
                        <li>Adaptación a las tendencias actuales de diseño y marketing</li>
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