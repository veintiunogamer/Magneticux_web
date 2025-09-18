@extends('frontend.layouts.main')

@section('title', 'Contenido vertical para redes')

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
                    <i class="fas fa-mobile me-1"></i> Contenido vertical para redes
                </li>

            </ol>

        </div>

        <br><br>


        <div class="row align-items-start gy-4">

            <!-- Header -->
            <div class="col-12 d-flex align-items-center mb-3">

                <span class="service-icon-circle me-3">
                    <i class="fa fa-mobile"></i>
                </span>

                <div>
                    <span class="service-link">Servicios &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;&nbsp; Contenido vertical para redes</span>
                    <h1 class="fw-bold mb-0 color-primary">Contenido vertical para redes</h1>
                </div>

            </div>

            <!-- Descripción general -->
            <div class="col-lg-7">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Descripción general</h3>
                    <p>
                        Ofrecemos servicios de producción de contenido vertical optimizado para redes sociales como Instagram, TikTok y Facebook. 
                        Nuestro equipo crea videos atractivos y dinámicos en formato vertical que capturan la atención de la audiencia móvil. 
                        Desde la conceptualización hasta la edición final, nos aseguramos de que cada video esté diseñado para maximizar el impacto en plataformas sociales, ayudando a las marcas a aumentar su visibilidad y engagement.
                    </p>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">¿Qué incluye el servicio?</h3>
                    <ul>
                        <li>Consultoría inicial para entender los objetivos del contenido</li>
                        <li>Desarrollo de conceptos creativos adaptados a formato vertical</li>
                        <li>Filmación con equipo especializado para contenido móvil</li>
                        <li>Edición dinámica y atractiva, optimizada para redes sociales</li>
                        <li>Incorporación de música, gráficos y efectos visuales</li>
                        <li>Revisiones y ajustes según feedback del cliente</li>
                        <li>Entrega en formatos adecuados para diversas plataformas sociales</li>
                    </ul>
                </div>

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Ideal para</h3>
                    <p>Marcas y empresas que buscan aumentar su presencia en redes sociales mediante contenido visual atractivo y adaptado a dispositivos móviles.</p>
                </div>

            </div>

            <div class="col-lg-5">

                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Entregables</h3>
                    <ul>
                        <li>Concepto creativo y guion</li>
                        <li>Filmación en formato vertical</li>
                        <li>Edición dinámica y atractiva</li>
                        <li>Incorporación de música y gráficos</li>
                        <li>Formatos optimizados para Instagram, TikTok, Facebook, etc.</li>
                    </ul>
                </div>
                
                <div class="service-detail-card mb-4">
                    <h3 class="color-primary mb-2">Beneficios clave</h3>
                    <ul>
                        <li>Mejora la visibilidad y el engagement en redes sociales</li>
                        <li>Contenido optimizado para dispositivos móviles</li>
                        <li>Aumento del alcance orgánico y viralidad</li>
                        <li>Adaptación a las tendencias actuales de consumo de contenido</li>
                        <li>Soporte completo desde la idea hasta el producto final</li>
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

        <!-- botón flotante whatsapp -->
        <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($message) }}"
            id="whatsapp-button"
            target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        
    </section>

@endsection