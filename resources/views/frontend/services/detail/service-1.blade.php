@extends('frontend.layouts.main')

@section('title', 'Video Corporativo')

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
                    <i class="fas fa-video-camera me-1"></i> Video Corporativo
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Detalle del servicio -->
        <div class="row align-items-start gy-4">

            <div class="col-12 d-flex align-items-center mb-3">

                <span class="service-icon-circle me-3">
                    <i class="fa fa-video-camera"></i>
                </span>

                <div>
                    <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Video Corporativo</span>
                    <h1 class="fw-bold mb-0 color-primary" style="font-size:2.7rem;">Video Corporativo</h1>
                </div>
            </div>

            <div class="col-lg-7">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios de producción de video corporativo para empresas que buscan comunicar su mensaje de manera efectiva. 
                        Desde la conceptualización y el guion hasta la filmación y la postproducción, nuestro equipo maneja cada etapa del proceso. 
                        Creamos videos institucionales, promocionales, testimoniales y de capacitación, adaptados a las necesidades específicas de cada cliente. 
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Consultoría inicial para entender los objetivos del video</li>
                        <li>Desarrollo de concepto y guion</li>
                        <li>Planificación y logística de la producción</li>
                        <li>Filmación en alta definición con equipo profesional</li>
                        <li>Edición y postproducción, incluyendo gráficos y música</li>
                        <li>Revisiones y ajustes según feedback del cliente</li>
                        <li>Entrega en formatos adecuados para diversas plataformas</li>
                    </ul>
                </div>
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal para</h3>
                    <p>Un video profesional mejora la percepción de tu marca, comunica mensajes complejos de forma sencilla y aumenta el engagement en plataformas digitales, un pilar de la digitalización.</p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Guion técnico y storyboard</li>
                        <li>Rodaje multi-cámara</li>
                        <li>Edición avanzada y etalonaje</li>
                        <li>Subtítulos opcionales</li>
                        <li>Formatos horizontal y vertical</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios Clave</h3>
                    <ul>
                        <li>Comunicación clara y profesional de tu mensaje</li>
                        <li>Mejora la imagen de marca y la confianza del cliente</li>
                        <li>Contenido versátil para múltiples plataformas</li>
                        <li>Aumento del engagement y alcance en redes sociales</li>
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

    </section>

@endsection