@extends('frontend.layouts.main')

@section('title', 'Branding')

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
                    <i class="fas fa-palette me-1"></i> Diseño Gráfico y Branding
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

            <i class="fa fa-palette fa-3x my-2 color-primary"></i>
            <h2 class="card-title my-3 fw-bold">Diseño Gráfico y Branding</h2>

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

                Desarrollamos la identidad visual completa para tu marca o proyecto, 
                asegurando consistencia y profesionalismo. Desde el diseño de logotipos memorables, 
                selección de paletas de colores y tipografía, hasta la creación de material publicitario 
                cohesivo como folletos, tarjetas de visita, banners digitales y presentaciones. 
                Nos especializamos también en el diseño de miniaturas atractivas y optimizadas para 
                plataformas de video y redes sociales (YouTube, Instagram, etc.), 
                cruciales para captar la atención y mejorar las tasas de clics (CTR).

            </p>

        </div>

        <!-- Que Incluye -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-list-check color-primary"></i>&nbsp;
                ¿Qué Incluye?
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Video final editado en alta resolución</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos de video en formatos específicos para diferentes plataformas</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Gráficos y animaciones como archivos separados (si aplica)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Proyecto de edición (bajo acuerdo)</li>
            </ul>

        </div>

        <!-- Beneficios Clave -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bolt color-primary"></i>&nbsp;
                Beneficios Clave
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Identidad de marca sólida, coherente y profesional</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Mejora del reconocimiento y la recordación de marca</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Materiales visuales atractivos que captan la atención</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Miniaturas que aumentan el CTR y la visibilidad del contenido</li>
            </ul>

        </div>

        <!-- Ideal Para -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bullseye color-primary"></i>&nbsp;
                Ideal Para
            </h4>

            <p class="fw-bold text-muted my-3">

                Startups, empresas consolidadas, creadores de contenido, youtubers, influencers y 
                cualquier proyecto que necesite una identidad visual fuerte o mejorar el impacto 
                de sus miniaturas.

            </p>

        </div>

        <!-- Entregables Tipicos -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-box color-primary"></i>&nbsp;
                Entregables Típicos
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos de logotipo en varios formatos (vectorial, PNG, JPG)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Manual de identidad visual (PDF)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos de diseño editables y listos para imprenta/digital (según proyecto)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Set de miniaturas en formatos optimizados</li>
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