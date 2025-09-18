@extends('frontend.layouts.main')

@section('title', 'Software y Landing pages')

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
                    <i class="fas fa-code me-1"></i> Software y Landing pages
                </li>
            </ol>

        </div>
        <br><br>

        <div class="row align-items-start gy-4">

            <!-- Header -->
            <div class="col-12 d-flex align-items-center mb-3">

                <span class="service-icon-circle me-3">
                    <i class="fa fa-code"></i>
                </span>

                <div>
                    <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Software y Landing pages</span>
                    <h1 class="fw-bold mb-0 color-primary">Software y Landing pages</h1>
                </div>

            </div>

            <!-- Descripción general -->
            <div class="col-lg-7">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios de desarrollo de software y creación de landing pages para ayudar a las empresas a establecer una presencia en línea efectiva y alcanzar sus objetivos comerciales. 
                        Nuestro equipo de expertos trabaja en estrecha colaboración con los clientes para diseñar y desarrollar soluciones personalizadas que se adapten a sus necesidades específicas, ya sea a través de aplicaciones web, móviles o páginas de destino optimizadas para la conversión.
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Desarrollo de software a medida</li>
                        <li>Diseño y creación de landing pages optimizadas</li>
                        <li>Integración con herramientas de marketing y análisis</li>
                        <li>Optimización para motores de búsqueda (SEO)</li>
                        <li>Pruebas y aseguramiento de la calidad</li>
                        <li>Mantenimiento y soporte continuo</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal para</h3>
                    <p>
                        Empresas que buscan desarrollar aplicaciones personalizadas, startups que necesitan una plataforma digital para lanzar su producto, negocios que desean crear landing pages efectivas para campañas de marketing específicas y cualquier organización que busque mejorar su presencia en línea mediante soluciones tecnológicas innovadoras.
                    </p>

                </div>


            </div>

            <div class="col-lg-5">

                <!-- entregables -->
                 <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Software funcional y probado según los requisitos del cliente</li>
                        <li>Landing pages diseñadas y optimizadas para la conversión</li>
                        <li>Documentación técnica y manuales de usuario</li>
                        <li>Soporte post-lanzamiento y actualizaciones según sea necesario</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios clave</h3>
                    <ul>
                        <li>Soluciones personalizadas que se adaptan a las necesidades del negocio</li>
                        <li>Soporte completo desde la idea hasta la entrega final</li>
                        <li>Adaptación a las tendencias actuales de diseño y tecnología</li>
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