@extends('frontend.layouts.main')

@section('title', 'Inicio - Enfoque 21')

@section('content')


    <!-- Cabecera tipo hero -->
    <section class="home_header_section d-flex flex-column justify-content-center align-items-center text-center" style="max-width: 1200px; width: 95vw; margin: 0 auto;">
        <span class="magneticux-logo">
            Magnetic<span class="ux"> UX</span>
        </span>
        <div class="magneticux-slogan">
            Tu esencia merece diseño.
        </div>
    </section>


    <!-- ¿Qué es MagneticUX? -->
    <section class="container d-flex  mt-5 flex-column align-items-center justify-content-center py-5">
        <div class="mb-4">
            <div style="width: 200px; height: 200px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                <svg width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="80" cy="80" r="75" stroke="#6ec1e4" stroke-width="3" stroke-dasharray="8 8" fill="none"/>
                  <path d="M60 100 L100 60" stroke="#6ec1e4" stroke-width="7" stroke-linecap="round"/>
                  <rect x="90" y="90" width="30" height="7" rx="3.5" fill="#6ec1e4" transform="rotate(-45 90 90)"/>
                </svg>
            </div>
        </div>
        <h2 class="fw-bold mb-3" style="color: #6ec1e4; font-size: 2.5rem;">¿Qué es MagneticUX?</h2>
        <div class="mx-auto" style="max-width: 800px;">
            <p class="fs-5 text-white-50 mb-3" style="line-height: 1.7;">
                MagneticUX es un estudio de diseño estratégico y emocional. Nos dedicamos a crear identidades de marca auténticas y profundas para emprendedores, marcas personales y creativos digitales que buscan conectar de verdad con su audiencia.<br><br>
                Creemos que cada proyecto tiene una esencia única. Nuestra misión es traducirla en una experiencia visual y funcional que no solo se vea bien, sino que se sienta correcta, memorable y, sobre todo, magnética.
            </p>
        </div>
    </section>
    

    <!-- Nuestros Servicios -->
    <section class="container py-5">
        <h2 class="fw-bold text-center mb-2" style="color: #6ec1e4; font-size: 2.5rem;">Nuestros Servicios</h2>
        <p class="text-center mb-5" style="color: #cfd8df; font-size: 1.2rem;">Soluciones diseñadas para dar vida y alma a tu proyecto.</p>
    
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <!-- Servicio 1 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-video-camera"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Producción de Video Corporativo</h4>
                    <div class="text-white-50 mb-3 text-center">Creamos videos impactantes para presentaciones, promociones y redes sociales, cubriendo desde el guion hasta la postproducción final.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 2 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-camera"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Fotografía Profesional</h4>
                    <div class="text-white-50 mb-3 text-center">Capturamos la esencia de tus eventos, productos y equipo con imágenes de alta calidad para catálogos, web y perfiles corporativos.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 3 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-microphone"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Grabación y Edición de Audio</h4>
                    <div class="text-white-50 mb-3 text-center">Producimos audio de alta fidelidad para podcasts, locuciones y audiolibros, asegurando un sonido claro y profesional.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 4 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-film"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Postproducción Audiovisual</h4>
                    <div class="text-white-50 mb-3 text-center">Transformamos tu material crudo en una pieza final pulida con edición avanzada, color, motion graphics y efectos visuales.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 5 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-pencil"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Diseño Gráfico y Branding</h4>
                    <div class="text-white-50 mb-3 text-center">Construimos la identidad visual de tu marca, desde el logo y la paleta de colores hasta miniaturas optimizadas para video.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 6 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-code"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Desarrollo Web Completo</h4>
                    <div class="text-white-50 mb-3 text-center">Creamos sitios web a medida, desde landing pages y webs corporativas hasta robustas tiendas de e-commerce.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 7 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-mobile"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Desarrollo de Aplicaciones</h4>
                    <div class="text-white-50 mb-3 text-center">Transformamos tus ideas en aplicaciones móviles (iOS/Android) y web (PWA) funcionales, desde el diseño hasta el lanzamiento.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Servicio 8 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-3 d-flex flex-column align-items-center" style="border-radius: 18px; min-height: 370px;">
                    <span class="service-icon-circle mb-3 mt-2">
                        <i class="fa fa-briefcase"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-3">Consultoría Audiovisual y Digital</h4>
                    <div class="text-white-50 mb-3 text-center">Te asesoramos para desarrollar una estrategia de contenido efectiva, desde la idea hasta la distribución y optimización SEO.</div>
                    <a href="#" class="fw-bold service-link mt-auto">Ampliar información <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

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
                    <span class="team-icon mb-4 mt-2">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-2">Daniel Sánchez</h4>
                    <div class="text-center member-role">CEO y Fundador</div>
                </div>
            </div>

            <!-- Miembro 2 -->
            <div class="col">
                <div class="card h-100 bg-transparent border border-secondary shadow-sm p-4 d-flex flex-column align-items-center justify-content-center member-card" style="border-radius: 16px; min-height: 340px;">
                    <span class="team-icon mb-4 mt-2">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <h4 class="fw-bold text-white text-center mb-2">José Alzate</h4>
                    <div class="text-center member-role">Desarrollador y Auditor</div>
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
    <section class="col-12 text-center my-5 p-3 home_contact_section  slide-up-anim">
        <p class="display-5 fw-bolder upper text-white mt-5">¿Listo para crear algo memorable?</p>
        <p class="fs-5 text-secondary text-white">
            Hablemos de tu proyecto, cuéntanos tu idea y descubramos juntos cómo hacerla magnética.
        </p>
        <a href="#" class="btn btn-magneticux col-lg-4 col-md-4 col-sm-8 p-3 btn-lg my-5 text-white fw-bold" role="button">Hablemos de tu proyecto</a>
    </section>

@endsection
