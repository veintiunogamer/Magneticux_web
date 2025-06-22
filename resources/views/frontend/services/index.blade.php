@extends('frontend.layouts.main')

@section('title', 'Servicios - Enfoque 21')

@section('content')

    <!-- Contenido -->
    <div class="container my-3">

        <br><br>

        <!-- Miga de pan -->
        <div class="breadcrumbs my-3 slide-right-anim">

            <ol class="breadcrumb bg-light rounded-4 px-3 p-3 fw-bold">

                <li class="breadcrumb-item ms-3">
                    <a href="/" class="text-decoration-none">
                        <i class="fas fa-home me-1"></i> Inicio
                    </a>
                </li>

                <li class="breadcrumb-item active color-primary" aria-current="page">
                    <i class="fas fa-briefcase me-1"></i> Servicios
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Servicios Audiovisuales y Digitales -->
        <div class="col-12 mt-5 mb-4 slide-right-anim">
        
            <h2 class="upper fw-bold">
                <i class="fa fa-list color-primary"></i>&nbsp;
                Nuestros Servicios Audiovisuales y Digitales
            </h2>

            <p class="text-secondary fs-5">
                Descubra cómo Enfoque 21 puede ayudarle a alcanzar 
                sus objetivos de comunicación con soluciones audiovisuales, 
                web y de marketing profesionales y creativas.
            </p>

        </div>

        <br><br>

        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 slide-right-anim">

            <!-- Produccion Video Corporativo -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-film color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Producción de Video Corporativo</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Creación de videos de alta calidad para empresas, 
                            desde el guion hasta la postproducción.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-1']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Fotografia Profesional -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-camera color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Fotografía Profesional</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Sesiones fotográficas para productos, 
                            eventos y retratos con equipo de última generación.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-2']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Grabacion y edicion de Audio -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-microphone color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Grabación y Edición de Audio</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Servicios de locución, podcasts, 
                            y postproducción de audio para diversos proyectos.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-3']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 slide-right-anim">

            <!-- Postproduccion Audiovisual -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-clapperboard color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Postproducción Audiovisual</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Edición de video, corrección de color, motion graphics y efectos visuales.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-4'])  }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Diseño Gráfico y Branding -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-palette color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Diseño Gráfico y Branding</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Identidad visual, logotipos, material publicitario 
                            y diseño de miniaturas impactantes.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-5']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Desarrollo Web Completo -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-globe color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Desarrollo Web Completo</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Creación, mantenimiento y actualización de 
                            sitios web modernos y responsivos.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-6']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 slide-right-anim">

            <!-- Desarrollo Movil -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-code color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Desarrollo Movil</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Desarrollo de aplicaciones móviles (iOS/Android) 
                            y aplicaciones web a medida.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-7']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Consultoría Audiovisual y Digital -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-users color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Consultoría Audiovisual y Digital</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Asesoramiento experto para optimizar tus 
                            estrategias de comunicación y marketing.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-8']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Streaming y Eventos en Vivo -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column">

                        <i class="fa fa-tower-broadcast color-primary fa-3x my-4"></i>
                        <h4 class="card-title my-3 fw-bold">Streaming y Eventos en Vivo</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Cobertura y transmisión en directo de eventos, 
                            conferencias y webinars.
                        </p>
                        
                        <a href="{{ route('servicio.detalle', ['service_name' => 'service-9']) }}" class="btn btn-primary btn-lg mt-auto">
                            Más Información
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

        <br><br>

        <!-- Planes de marketing -->
        <div class="col-12 mt-5 mb-4 slide-right-anim">
            
            <h2 class="upper fw-bold">
                <i class="fa fa-chart-line color-primary"></i>&nbsp;
                Paquetes de Marketing Digital
            </h2>

            <p class="text-secondary fs-5">
                Soluciones integrales para potenciar tu marca en el mundo digital. 
                Elige el paquete que mejor se adapte a tus necesidades y objetivos.
            </p>

        </div>

        <br><br>

        <!-- Paquetes Marketing #1 -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 slide-right-anim">

            <!-- Paquete Inicial -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm rounded-4 p-3">

                    <div class="col-12 text-center">
                        <i class="fa fa-box color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">Paquete Inicial</h4>
                        <p class="fw-bolder fs-5 text-secondary">199€ / mes</p>

                        <p class="card-text flex-grow-1 mb-2 mt-4">
                            Ideal para arrancar tu presencia online y 
                            comenzar a construir tu marca.
                        </p>
                    </div>

                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled mt-2 ms-3">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Análisis básico de presencia online</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Configuración de 1-2 perfiles sociales</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 4 posts mensuales</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Diseño de 2 miniaturas básicas para video/post</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Reporte mensual básico</li>
                        </ul>
                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Paquete Despegue Visual -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm rounded-4 p-3">
                    
                    <div class="col-12 text-center">
                        <i class="fa fa-camera color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">Paquete Despegue Visual</h4>
                        <p class="fw-bolder fs-5 text-secondary">249€ (Pago Único)</p>

                        <p class="card-text flex-grow-1 mb-2 mt-4">
                            Un impulso visual rápido para tus redes o web. 
                            Perfecto para campañas cortas o lanzamientos.
                        </p>
                    </div>

                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled mt-2 ms-3">

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                2 videos cortos  Reels/TikTok/Shorts
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Diseño de 5 imágenes para redes sociales
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Consultoría (30 min) sobre estrategia visual
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Entrega rápida (7-10 días hábiles)
                            </li>

                        </ul>

                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Paquete Impulso -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm rounded-4 p-3 border-accent bg-light-accent">

                    <div class="col-12 text-center">

                        <i class="fa fa-bolt color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">Paquete Impulso</h4>
                        <p class="fw-bolder fs-5 text-secondary">399€ / mes</p>

                        <p class="card-text flex-grow-1 mt-4">
                            Para hacer crecer tu audiencia y 
                            mejorar el engagement con contenido regular.
                        </p>

                    </div>

                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled mt-2 ms-3">

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Paquete Inicial + 1 Perfil Social
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Creación de 8-12 posts mensuales
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Diseño de 5-8 miniaturas optimizadas
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                SEO on-page básico para tu web
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Estrategia de crecimiento de seguidores
                            </li>
                        </ul>

                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

        <!-- Paquetes Marketing #2 -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 slide-right-anim">

            <!-- Paquete Conexión Local -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm rounded-4 p-3">

                    <div class="col-12 text-center">
                    
                        <i class="fa fa-map-marker-alt color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">Paquete Conexión Local</h4>
                        <p class="fw-bolder fs-5 text-secondary">299€ / mes</p>

                        <p class="card-text flex-grow-1 mt-4">
                            Optimiza tu presencia local y atrae clientes de tu área.
                        </p>

                    </div>
                    
                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled mt-4 ms-3">

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Optimización perfil de Google Business (GMB)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Gestión básica  (1-2 posts, respuesta a reseñas)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Creación de 2 publicaciones mensuales
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Análisis de palabras clave locales (básico)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Reporte mensual de visibilidad local
                            </li>

                        </ul>

                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Paquete Pro -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm rounded-4 p-3">

                    <div class="col-12 text-center">
                        
                        <i class="fa fa-star color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">Paquete Pro</h4>
                        <p class="fw-bolder fs-5 text-secondary">Consultar Precio</p>

                        <p class="card-text flex-grow-1 mb-2 mt-4">
                            Solución completa para una estrategia de
                            marketing digital robusta.
                        </p>

                    </div>

                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled mt-2 ms-3">

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Todo lo del Paquete Impulso
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Diseño de miniaturas ilimitadas y A/B testing
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                SEO avanzado, Campañas de  Marketing
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Publicidad Online (SEM básico)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Consultoría estratégica continua
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Reportes personalizados y análisis de ROI
                            </li>

                        </ul>

                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- Paquete Personalizado -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm rounded-4 p-3 border-accent bg-light-accent">

                    <div class="col-12 text-center">
                        <i class="fa fa-wand-magic-sparkles color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">Paquete Personalizado</h4>
                        <p class="fw-bolder fs-5 text-secondary">Precio a medida</p>

                        <p class="card-text flex-grow-1 mb-2 mt-4">
                            ¿Necesitas algo único? Creamos un plan 
                            de marketing totalmente adaptado a tus objetivos y presupuesto.
                        </p>
                    </div>

                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled mt-2 ms-3">

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Estrategia de marketing 100% personalizada
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Selección flexible de servicios (video, foto, web, SEO, etc.)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Consultoría y seguimiento continuo del plan
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Ideal para proyectos específicos o necesidades complejas
                            </li>

                        </ul>

                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

        <br><br>

        <!-- Paquetes de Servicios Inmobiliarios -->
        <div class="col-12 mt-5 mb-4 slide-right-anim">
            
            <h2 class="upper fw-bold">
                <i class="fa fa-home color-primary"></i>&nbsp;
                Paquetes de Servicios Inmobiliarios
            </h2>

            <p class="text-secondary fs-5">
                Soluciones especializadas para agencias inmobiliarias y agentes 
                que buscan destacar sus propiedades y optimizar su presencia digital.
            </p>

        </div>

        <br><br>

        <!-- Paquetes Inmobiliarios #1 -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 slide-right-anim">

            <!-- PAQUETE ENTRADA EXPRESS -->
            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm rounded-4 p-3">

                    <div class="col-12 text-center">
                        <i class="fa fa-bolt color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">PAQUETE ENTRADA EXPRESS</h4>
                        <p class="fw-bolder fs-5 text-secondary mx-0">75€ + IVA</p>
                        <p>por propiedad</p>

                        <p class="card-text flex-grow-1 mb-2 mt-4">
                            Lo esencial para listar una propiedad rápidamente.
                        </p>
                    </div>

                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled mt-4 ms-3">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Fotografía profesional (8-10 imágenes editadas)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Redacción del anuncio optimizada y concisa
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Publicación en 1 portal principal (Idealista/Fotocasa)
                            </li>
                        </ul>
                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- PAQUETE BÁSICO – “Listo para Publicar” -->
            <div class="col zoom-hover">
                
                <div class="card h-100 shadow-sm rounded-4 p-3">

                    <div class="col-12 text-center">

                        <i class="fa fa-home color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">PAQUETE BÁSICO</h4>
                        <p class="fw-bolder fs-5 text-secondary mx-0">120€ + IVA</p>
                        <p>por propiedad</p>

                        <p class="card-text flex-grow-1 mb-2 mt-4">
                            Ideal para agentes que necesitan apoyo puntual al publicar viviendas.
                        </p>

                    </div>
                    
                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled ms-3">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Sesión fotográfica (10–15 imágenes)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Vídeo corto (60 segundos)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Redacción del anuncio optimizada
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Publicación en Idealista u otro portal (cliente debe tener cuenta activa)
                            </li>
                        </ul>


                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- PAQUETE PRO – “Presencia & Movimiento” -->
            <div class="col zoom-hover">
                
                <div class="card h-100 shadow-sm rounded-4 p-3 border-accent bg-light-accent">

                    <div class="col-12 text-center">
                    
                        <i class="fa fa-briefcase color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">PAQUETE PRO</h4>
                        <p class="fw-bolder fs-5 text-secondary mx-0">280€ + IVA</p>
                        <p class="small text-secondary mx-0">por propiedad (Pack de mantenimiento disponible desde 60€/mes)</p>

                        <p class="card-text flex-grow-1 mb-2 mt-1">
                            Pensado para inmobiliarias con rotación baja 
                            pero que desean destacar cada propiedad.
                        </p>

                    </div>
                    
                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled ms-3">

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Fotografía profesional (15–20 imágenes)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Vídeo narrativo (tipo recorrido, 1–2 min)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Plano acotado básico (tipo Idealista)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Redacción comercial del anuncio
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Publicación en hasta 2 portales
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Revisión de cuenta Idealista (mejoras de visibilidad y posicionamiento)
                            </li>

                        </ul>

                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

        <!-- Paquetes Inmobiliarios #2-->
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 slide-right-anim">

            <!-- PAQUETE CARTERA CRECIENTE -->
            <div class="col zoom-hover">
                
                <div class="card h-100 shadow-sm rounded-4 p-3">

                    <div class="col-12 text-center">
                    
                        <i class="fa fa-money-bill-trend-up color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">PAQUETE CARTERA CRECIENTE</h4>
                        <p class="fw-bolder fs-5 text-secondary mx-0">250€ + IVA</p>
                        <p class="small text-secondary mx-0">por propiedad (mín. 2 prop., precio decreciente por volumen)</p>

                        <p class="card-text flex-grow-1 mb-2 mt-1">
                            Para agentes o pequeñas inmobiliarias con 2-4 propiedades.
                        </p>

                    </div>
                    
                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled ms-3">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Fotografía profesional completa (15–20 imágenes / propiedad)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Vídeo tour descriptivo (hasta 90s / propiedad)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Plano acotado básico / propiedad
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Redacción comercial y publicación en hasta 2 portales / propiedad
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Optimización básica de anuncios
                            </li>
                        </ul>

                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- PAQUETE PREMIUM -->
            <div class="col zoom-hover">
                
                <div class="card h-100 shadow-sm rounded-4 p-3">

                    <div class="col-12 text-center">
                    
                        <i class="fa fa-gem color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">PAQUETE PREMIUM</h4>
                        <p class="fw-bolder fs-5 text-secondary mx-0">580€ + IVA</p>
                        <p class="small text-secondary mx-0">mensual (incluye 3 propiedades al mes)</p>

                        <p class="card-text flex-grow-1 mb-2 mt-1">
                            Para inmobiliarias que desean externalizar el marketing digital de forma continua.
                        </p>

                    </div>
                    
                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled ms-3">

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Producción completa de contenido para 3 propiedades mensuales (foto + vídeo + plano)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Gestión total de cuenta en Idealista (subida, optimización, seguimiento)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Diseño de banners y material gráfico personalizado
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Gestión de publicaciones en redes sociales (hasta 2 reels/semana)
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Informe mensual de rendimiento de anuncios
                            </li>

                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Asistencia prioritaria y asesoría continua en imagen digital
                            </li>

                        </ul>

                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

            <!-- PAQUETE DOMINIO TOTAL -->
            <div class="col zoom-hover">
                
                <div class="card h-100 shadow-sm rounded-4 p-3 border-accent bg-light-accent">

                    <div class="col-12 text-center">
                    
                        <i class="fa fa-crown color-primary fa-3x my-3"></i>
                        <h4 class="card-title my-2 fw-bold">PAQUETE DOMINIO TOTAL</h4>
                        <p class="fw-bolder fs-5 text-secondary mx-0">950€ + IVA</p>
                        <p class="small text-secondary mx-0">mensual (incluye 5-7 propiedades/mes, escalable)</p>

                        <p class="card-text flex-grow-1 mb-2 mt-1">
                            Gestión integral para inmobiliarias con alto volumen y visión de liderazgo.
                        </p>

                    </div>
                    
                    <div class="card-body d-flex flex-column">

                        <ul class="list-unstyled ms-3">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Todo lo del Paquete Premium (para 5-7 propiedades)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Gestión avanzada y proactiva de portales y RRSS
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Estrategia de marketing de contenidos local (blog, guías)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Gestión de campañas de publicidad online (presupuesto de ads aparte)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Informes avanzados con análisis predictivo (simulado)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Consultoría estratégica mensual de alto nivel
                            </li>
                            </ul>

                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Contactar para solicitar
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

        <!-- Servicios Adicionales -->
        <div class="col-lg-12 col-md-12 col-sm-12 mt-5 p-4 bg-grey border-grey rounded-3 slide-right-anim">

            <h3 class="fw-bold my-3">
                <i class="fa fa-plus-circle color-primary"></i>&nbsp;
                Servicios Adicionales Opcionales (Inmobiliaria)
            </h3>
            
            <ul class="my-4">
                <li>Tour virtual / Matterport / 360º (consultar disponibilidad)</li>
                <li>Impulso de anuncios (con presupuesto publicitario adicional)</li>
                <li>Traducción de anuncios para mercado extranjero</li>
                <li>Home Staging Virtual (consultar precios)</li>
            </ul>

            <p class="small text-muted">Estos servicios se cotizan de forma personalizada según las necesidades del proyecto.</p>

        </div>

        <!-- Contacto y proceso de solicitud -->
        <div class="col-lg-12 col-md-12 col-sm-12 mt-5 p-4 bg-light-accent rounded-4 slide-right-anim">
        
            <h3 class="fw-bold my-5">
                <i class="fa fa-plus-circle color-primary"></i>&nbsp;
                Información de Contacto y Proceso de Solicitud
            </h3>

            <div class="col-lg-12 col-md-12 co-sm-12 d-flex flex-wrap">
                
                <div class="col-lg-7 col-md-6 co-sm-6">
                    <p class="my-3">
                        Para solicitar cualquiera de nuestros servicios o paquetes 
                        (incluidos los de marketing e inmobiliarios), 
                        la forma preferida es que se dirija a su locutorio 
                        afiliado de Enfoque 21 más cercano. Ellos gestionarán su 
                        solicitud inicial y crearán su cuenta de cliente en nuestro sistema.
                    </p>

                    <p class="my-3">

                        Si no tiene un locutorio afiliado cercano, o para consultas 
                        generales y solicitud directa de paquetes, puede contactarnos 
                        directamente. Un administrador de Enfoque 21 recogerá sus datos 
                        y necesidades para iniciar el proceso y registrará su solicitud en 
                        nuestro sistema:

                    </p>
                </div>

                <div class="col-lg-5 col-md-6 co-sm-6">
                    <p class="ms-5">
                        <i class="fa fa-envelope color-primary"></i>&nbsp; 
                        <span>Email: enfoque21@gmail.com</span>
                    </p>

                    <p class="ms-5">
                        <i class="fa fa-phone color-primary"></i>&nbsp; 
                        <span>Teléfono: 613 864 713</span>
                    </p>

                    <p class="ms-5">
                        <i class="fa fa-map-marker-alt color-primary"></i>&nbsp; 
                        <span>Ubicación: Valencia, España</span>
                    </p>

                    <p class="ms-5">
                        <i class="fa fa-globe color-primary"></i>&nbsp; 
                        <span>Servicio: Remoto (Toda España), Presencial (Valencia)</span>
                    </p>

                    <p class="ms-5">
                        <i class="fa fa-linkedin color-primary"></i>&nbsp; 
                        <span>LinkedIn: www.linkedin.com/in/enfoque21</span>
                    </p>

                    <p class="ms-5">
                        <i class="fa fa-clock color-primary"></i>&nbsp; 
                        <span>Horario: Lunes a Viernes, 9:00 - 18:00</span>
                    </p>
                </div>

            </div>

        </div>

    </div>

@endsection