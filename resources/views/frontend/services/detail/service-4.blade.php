@extends('frontend.layouts.main')

@section('title', 'Post-produccion Audiovisual')

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
                    <i class="fas fa-film me-1"></i> Postproducción Audiovisual
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

            <h1 class="card-title my-3 fw-bold color-primary d-flex align-items-center">
                <span class="service-icon-circle mb-3 mt-2 me-4">
                    <i class="fa fa-film"></i>
                </span>
                Postproducción Audiovisual
            </h1>

        </div>

        <!-- Descripcion general -->
         <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-circle-info color-primary"></i>&nbsp;
                Descripción General
            </h4>

            <p class="fw-bold my-3">
                La postproducción es la etapa donde la magia cobra vida. 
                Nuestros servicios de postproducción transforman su material 
                crudo en una pieza audiovisual pulida y profesional. 
                Esto incluye edición de video avanzada, corrección de 
                color cinematográfica para lograr el look deseado, creación de motion graphics
                personalizados (títulos, tercios inferiores, animaciones de logo), y efectos 
                visuales (VFX) básicos para realzar la narrativa.
            </p>

        </div>

        <!-- Que Incluye -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-list-check color-primary"></i>&nbsp;
                ¿Qué Incluye?
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Edición y montaje de video a partir de material bruto</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Corrección de color y etalonaje profesional</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Diseño y animación de motion graphics (2D/3D básicos)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Creación de títulos y créditos</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Mezcla y diseño de sonido básico (sincronización, niveles)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Subtitulado y creación de versiones (si es necesario)</li>
            </ul>

        </div>

        <!-- Beneficios Clave -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bolt color-primary"></i>&nbsp;
                Beneficios Clave
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Producto final cohesivo, atractivo y profesional</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Mejora del impacto visual y narrativo del contenido</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Consistencia de marca a través de gráficos y estilo visual</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Optimización del material para diferentes plataformas</li>
            </ul>

        </div>

        <!-- Ideal Para -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bullseye color-primary"></i>&nbsp;
                Ideal Para
            </h4>

            <p class="fw-bold text-muted my-3">
                Productores de video, cineastas independientes, agencias de marketing, 
                empresas que generan contenido de video y necesitan un acabado profesional.
            </p>

        </div>

        <!-- Entregables Tipicos -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-box color-primary"></i>&nbsp;
                Entregables Típicos
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Video final editado en alta resolución</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos de video en formatos específicos para diferentes plataformas</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Gráficos y animaciones como archivos separados (si aplica)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Proyecto de edición (bajo acuerdo)</li>
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