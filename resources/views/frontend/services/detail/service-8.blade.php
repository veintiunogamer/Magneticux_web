@extends('frontend.layouts.main')

@section('title', 'Consultoria Audiovisual & Digital')

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
                    <i class="fas fa-briefcase me-1"></i> Consultoria Audiovisual & Digital
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

            <h1 class="card-title my-3 fw-bold d-flex align-items-center color-primary">
                <span class="service-icon-circle mb-3 mt-2 me-4">
                    <i class="fa fa-briefcase"></i>
                </span>
                Consultoria Audiovisual & Digital
            </h1>

        </div>

        <!-- Descripcion general -->
         <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-circle-info color-primary"></i>&nbsp;
                Descripción General
            </h4>

            <p class="fw-bold my-3">
                Si no está seguro de cómo el contenido audiovisual o las estrategias digitales 
                pueden beneficiar a su empresa o proyecto, nuestra consultoría puede ayudarle. 
                Analizamos sus necesidades, su público objetivo, su competencia y su presupuesto 
                para desarrollar una estrategia de contenido y digital efectiva. Esto puede 
                incluir desde la conceptualización de ideas para videos o campañas, hasta la 
                planificación de la distribución en canales adecuados, la optimización SEO de su 
                web, y la integración de todas sus acciones digitales con sus objetivos de 
                marketing y ventas.
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
                    Análisis de presencia online actual y competencia
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Definición de objetivos y KPIs
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Desarrollo de estrategia de contenido (temas, formatos, calendario)
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Recomendaciones para optimización SEO y SEM
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Asesoramiento en selección de plataformas y herramientas digitales
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Planes de marketing digital integrales
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Formación y capacitación para equipos internos (opcional)
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
                    Claridad en la dirección estratégica de tus esfuerzos digitales
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Optimización del retorno de la inversión (ROI) en marketing
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Mejora del posicionamiento de marca y alcance
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Toma de decisiones informada basada en análisis y datos
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>
                    Adaptación a las últimas tendencias y mejores prácticas del mercado
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
                Empresas que buscan mejorar su estrategia digital, startups que necesitan 
                definir su plan de marketing, o cualquier organización que quiera potenciar 
                su comunicación online.
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
                    Documento de estrategia digital y plan de acción
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Informe de análisis y recomendaciones
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Calendario de contenidos (si aplica)
                </li>
                <li class="my-3">
                    <span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>
                    Sesiones de consultoría y seguimiento
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