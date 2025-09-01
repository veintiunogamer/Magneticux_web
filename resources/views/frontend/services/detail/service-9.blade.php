@extends('frontend.layouts.main')

@section('Streaming, Eventos en vivo')

@section('content')

    <div class="container my-5 text-white">


        <br><br>

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
                    <i class="fas fa-tower-broadcast me-1"></i> Streaming y Eventos en Vivo
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

            <i class="fa fa-tower-broadcast fa-3x my-2 color-primary"></i>
            <h2 class="card-title my-3 fw-bold">Streaming y Eventos en Vivo</h2>
            
            <span class="gap-1">
                <i class="fa fa-star color-yellow"></i>
                <i class="fa fa-star color-yellow"></i>
                <i class="fa fa-star color-yellow"></i>
                <i class="fa fa-star color-yellow"></i>
                <i class="fa fa-star color-yellow"></i>
            </span>

            <span class="fw-bold ms-3">120 Opiniones</span>

            <a href="#" class="fw-bold ms-3 underline color-primary">Ver detalles</a>

        </div>

        <!-- Descripcion general -->
         <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-circle-info color-primary"></i>&nbsp;
                Descripción General
            </h4>

            <p class="fw-bold text-muted my-3">
                Llevamos sus eventos a una audiencia global o interna con nuestros servicios 
                de streaming en vivo. Ofrecemos cobertura multicámara, producción en tiempo 
                real con realización profesional, integración de gráficos y presentaciones, 
                y transmisión a plataformas populares como YouTube Live, Facebook Live, 
                LinkedIn Live, Twitch, o plataformas privadas de video. Ideal para conferencias, 
                webinars, lanzamientos de producto, eventos corporativos, formaciones y cualquier 
                evento que requiera difusión en directo.
            </p>

        </div>

        <!-- Que Incluye -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-list-check color-primary"></i>&nbsp;
                ¿Qué Incluye?
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Planificación técnica y logística del streaming
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Configuración de equipo de video y audio profesional en localización
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Producción multicámara con realización en directo
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Integración de presentaciones, videos pregrabados y gráficos
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Transmisión en alta calidad a las plataformas seleccionadas
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Grabación del evento para posterior VOD (Video On Demand)
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Soporte técnico durante la transmisión
                </li>
            </ul>

        </div>

        <!-- Beneficios Clave -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bolt color-primary"></i>&nbsp;
                Beneficios Clave
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Alcance global para tus eventos, sin barreras geográficas
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Mayor engagement e interacción con la audiencia remota
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Profesionalismo y alta calidad de transmisión
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Posibilidad de monetizar eventos o generar leads
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Contenido reutilizable a partir de la grabación del evento
                </li>
            </ul>

        </div>

        <!-- Ideal Para -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bullseye color-primary"></i>&nbsp;
                Ideal Para
            </h4>

            <p class="fw-bold text-muted my-3">

                Empresas, instituciones educativas, organizadores de eventos, agencias de comunicación, 
                y cualquier entidad que necesite transmitir eventos en vivo.

            </p>

        </div>

        <!-- Entregables Tipicos -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-box color-primary"></i>&nbsp;
                Entregables Típicos
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Transmisión en vivo exitosa del evento
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Grabación completa del evento en alta calidad (archivo de video)
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Estadísticas básicas de visualización (si la plataforma lo permite)
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Soporte técnico dedicado durante el evento
                </li>
            </ul>

        </div>

        <!-- Footer Servicio -->
         <div class="col-lg-12 col-md-12 col-sm-12 text-center bg-light-accent p-4 rounded-4 my-5">
            
            <h3 class="fw-bold my-4">
                <i class="fa fa-briefcase color-primary"></i>&nbsp;
                ¿Interesado en este Servicio?
            </h3>

            <p class="my-4">
                Para solicitar este servicio, por favor diríjase a su locutorio afiliado de 
                Enfoque 21 más cercano. Ellos gestionarán su solicitud y crearán su 
                cuenta de cliente.
            </p>

            <a href="#" class="btn btn-primary btn-lg my-5">Acceder Panel Afiliados</a>

        </div>

    </div>

@endsection