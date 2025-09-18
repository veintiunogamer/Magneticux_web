@extends('frontend.layouts.main')

@section('title', 'Branding e Identidad Visual')

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
                    <i class="fas fa-star me-1"></i> Branding e Identidad Visual
                </li>

            </ol>

        </div>

        <br><br>

        <div class="row align-items-start gy-4">

            <!-- Header -->
            <div class="col-12 d-flex align-items-center mb-3">

                <span class="service-icon-circle me-3">
                    <i class="fa fa-star"></i>
                </span>

                <div>
                    <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Branding e Identidad Visual</span>
                    <h1 class="fw-bold mb-0 color-primary">Branding e Identidad Visual</h1>
                </div>

            </div>

            <!-- Descripción general -->
            <div class="col-lg-7">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios de branding e identidad visual para ayudar a las empresas a definir y comunicar su marca de manera efectiva. 
                        Nuestro enfoque integral incluye la creación de logotipos, paletas de colores, tipografías y otros elementos visuales que reflejan la esencia de la marca. 
                        Trabajamos en estrecha colaboración con nuestros clientes para desarrollar una identidad coherente y atractiva que resuene con su audiencia objetivo.
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Consultoría inicial para entender los objetivos y valores de la marca</li>
                        <li>Investigación de mercado y análisis de la competencia</li>
                        <li>Desarrollo de conceptos y propuestas de diseño</li>
                        <li>Revisiones y ajustes según feedback del cliente</li>
                        <li>Entrega de archivos en formatos adecuados para impresión y uso digital</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal para</h3>
                    <p>
                        Empresas nuevas que buscan establecer su identidad de marca, negocios existentes que desean refrescar su imagen, 
                        organizaciones que buscan una identidad visual coherente para sus campañas de marketing y cualquier entidad que quiera destacar en un mercado competitivo.
                    </p>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Logotipo en varios formatos (PNG, SVG, JPG)</li>
                        <li>Manual de identidad visual</li>
                        <li>Paleta de colores y tipografías</li>
                        <li>Plantillas para presentaciones y documentos</li>
                        <li>Materiales promocionales básicos (tarjetas de presentación, folletos)</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios clave</h3>
                    <ul>
                        <li>Identidad de marca clara y coherente</li>
                        <li>Diferenciación frente a la competencia</li>
                        <li>Mayor reconocimiento y recordación de la marca</li>
                        <li>Mejora en la percepción y confianza del cliente</li>
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