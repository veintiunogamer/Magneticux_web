@extends('frontend.layouts.main')

@section('title', 'Inicio - Magnetic UX')

@section('content')


    <!-- Cabecera tipo hero -->
    <section class="home_header_section d-flex flex-column justify-content-center align-items-center text-center">
        <span class="magneticux-logo">
            Magnetic<span class="ux">UX</span>
        </span>

        <div class="magneticux-slogan my-5">
            Tu esencia merece diseño. Transformamos ideas en experiencias visuales y emocionales que conectan.
        </div>

        
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 mt-3 w-100">
            <a href="#contact" class="btn-gradient fw-bold btn-lg px-4 py-2 d-flex align-items-center justify-content-center" style="font-size: 1.1rem;">
                Comienza tu proyecto
                <span class="ms-2" style="font-size: 1.3rem;">→</span>
            </a>
            <a href="#services" class="btn-gradient-outline fw-bold btn-lg px-4 py-2 d-flex align-items-center justify-content-center" style="font-size: 1.1rem;">
                Ver servicios
            </a>
        </div>

    </section>


    <!-- ¿Qué es MagneticUX? -->
    <section class="container py-5" id="aboutUs" style="padding-top: 120px; padding-bottom: 80px;">

        <div class="row align-items-center justify-content-center gx-5 gy-5">
            <div class="col-12 col-md-7 text-md-start text-center">
                <h2 class="fw-bold mb-3 color-primary" style="font-size: 2.5rem;">¿Qué es MagneticUX?</h2>
                <p class="fs-5 text-white-50 mb-3" style="line-height: 1.7;">
                    MagneticUX es un estudio de diseño estratégico y emocional. Creamos identidades auténticas y memorables para emprendedores, marcas personales y creativos digitales.<br><br>
                    Nuestro enfoque une investigación, arte y tecnología para que tu marca conecte de verdad con tu audiencia.
                </p>
            </div>

            <div class="col-12 col-md-5 d-flex justify-content-center">
                <div class="about-icon-circle d-flex align-items-center justify-content-center mx-auto">
                    <i class="fa fa-pencil"></i>
                </div>
            </div>

        </div>
        
    </section>
    

    <!-- Nuestros Servicios -->
    <section class="container py-5" id="services" style="padding-top: 120px; padding-bottom: 80px;">

        <h2 class="fw-bold text-center mb-2" style="color: #6ec1e4; font-size: 2.5rem;">Nuestros Servicios</h2>
        <p class="text-center mb-5" style="color: #cfd8df; font-size: 1.2rem;">Soluciones diseñadas para dar vida y alma a tu proyecto.</p>
    
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <!-- Servicio 1 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4">
                    <span class="service-icon-circle mb-4">
                        <i class="fa fa-video-camera"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-2">Video Corporativo</h4>
                    <div class="text-white-50 mb-4 text-center">Producción audiovisual completa para empresas y marcas.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-1']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información</a>
                </div>
            </div>

            <!-- Servicio 2 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-camera"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Fotografía Profesional</h4>
                    <div class="text-white-50 mb-3 text-center">Sesiones fotográficas de alta calidad para productos, eventos y equipos.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-2']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 5 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-star"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Branding e identidad visual</h4>
                    <div class="text-white-50 mb-3 text-center">Diseño integral de identidad visual para conectar con tu audiencia.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-5']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 6 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-code"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Software y Landing pages</h4>
                    <div class="text-white-50 mb-3 text-center">Soluciones digitales a medida, incluyendo software de facturación y landing pages.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-6']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 3 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-mobile"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Contenido vertical para redes</h4>
                    <div class="text-white-50 mb-3 text-center">Creación de contenido optimizado para TikTok, Reels y Shorts.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-3']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 4 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-calendar"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Branding para Eventos</h4>
                    <div class="text-white-50 mb-3 text-center">Identidad visual y materiales para eventos presenciales y digitales.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-4']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 5 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-paint-brush"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Delineado AutoCAD</h4>
                    <div class="text-white-50 mb-3 text-center">Creación de planos técnicos 2D precisos y organizados.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-5']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 7 -->
            <div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-layer-group"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Render de planos</h4>
                    <div class="text-white-50 mb-3 text-center">Visualización 3D fotorrealista a partir de planos 2D.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-7']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 8 -->
            <!--<div class="col">
                <div class="service-card h-100 d-flex flex-column align-items-center justify-content-between p-4" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-briefcase"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Consultoría Audiovisual y Digital</h4>
                    <div class="text-white-50 mb-3 text-center">Te asesoramos para desarrollar una estrategia de contenido efectiva, desde la idea hasta la distribución y optimización SEO.</div>
                    <a href="{{ route('servicio.detalle', ['service_name' => 'service-8']) }}" class="btn-gradient-service fw-bold mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div> -->

        </div>

    </section>
    
    <!-- Nuestro Equipo -->
    <section class="container py-5">
        
        <h2 class="fw-bold text-center mb-2" style="color: #6ec1e4; font-size: 2.5rem;">Nuestro Equipo</h2>
        <p class="text-center mb-5" style="color: #cfd8df; font-size: 1.2rem;">Las mentes detrás de la magia.</p>
        
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <!-- Miembro 1 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-4 d-flex flex-column align-items-center justify-content-center member-card" style="border-radius: 16px; min-height: 340px;">
                    <span class="team-icon mb-4 mt-4">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-2">Daniel Sánchez</h4>
                    <div class="text-center member-role">CEO y Fundador</div>
                </div>
            </div>

            <!-- Miembro 2 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-4 d-flex flex-column align-items-center justify-content-center member-card" style="border-radius: 16px; min-height: 340px;">
                    <span class="team-icon mb-4 mt-4">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-2">José Alzate</h4>
                    <div class="text-center member-role">Tech Lead</div>
                </div>
            </div>
        </div>

    </section>

    <!-- Frase Equipo -->
    <section class="container-fluid py-5" style="background: #2a3238;">
        <div class="d-flex flex-column align-items-center mt-3 justify-content-center" style="min-height: 380px;">
            <blockquote class="text-center" style="max-width: 900px; margin: 0 auto;">
                <p class="display-6 fw-normal mb-4" style="color: #fff; font-size: 2.5rem; line-height: 1.2;">
                    "El diseño estratégico es el puente entre la esencia de tu marca y el corazón de tu cliente."
                </p>
                <footer class="blockquote-footer mt-3" style="color: #6ec1e4; font-size: 1.1rem;">
                    — El equipo de MagneticUX
                </footer>
            </blockquote>
        </div>
    </section>

    <!-- Listo para empezar -->
    <section class="col-12 text-center my-5 p-3 home_contact_section  slide-up-anim" id="contact" style="padding-top: 130px; padding-bottom: 80px;">
        <p class="display-5 fw-bolder upper text-white mt-5">¿Listo para crear algo memorable?</p>
        <p class="fs-5 text-secondary text-white">
            Hablemos de tu proyecto, cuéntanos tu idea y descubramos juntos cómo hacerla magnética.
        </p>
        <a href="#" class="btn btn-magneticux col-lg-4 col-md-4 col-sm-8 p-3 btn-lg my-5 text-white fw-bold" role="button">Hablemos de tu proyecto</a>
    </section>

    <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($message) }}"
        id="whatsapp-button"
        target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


@endsection
