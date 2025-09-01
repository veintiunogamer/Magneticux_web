@extends('frontend.layouts.main')

@section('title', 'Fotografia Profesional')

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
                    <i class="fas fa-camera me-1"></i> Fotografia Profesional
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

            <h1 class="card-title my-3 fw-bold color-primary d-flex align-items-center">
                <span class="service-icon-circle mb-3 mt-2 me-4">
                    <i class="fa fa-camera"></i>
                </span>
                Fotografia Profesional
            </h1>

        </div>

        <!-- Descripcion general -->
         <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-circle-info color-primary"></i>&nbsp;
                Descripción General
            </h4>

            <p class="fw-bold my-3">

                Ofrecemos servicios de fotografía profesional para una amplia gama de necesidades. 
                Cubrimos eventos corporativos y sociales, realizamos sesiones de fotografía 
                de producto para e-commerce y catálogos, y creamos retratos profesionales 
                para perfiles y uso corporativo. Utilizamos equipo de alta gama y técnicas 
                de iluminación avanzadas para asegurar imágenes impactantes y de calidad superior.

            </p>

        </div>

        <!-- Que Incluye -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-list-check color-primary"></i>&nbsp;
                ¿Qué Incluye?
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-4"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Planificación detallada de la sesión fotográfica</li>
                <li class="my-4"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Cobertura fotográfica en localización o estudio con equipo profesional</li>
                <li class="my-4"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Dirección artística durante la sesión (si aplica)</li>
                <li class="my-4"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Selección y curación de las mejores imágenes</li>
                <li class="my-4"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Retoque y edición profesional avanzada (color, contraste, limpieza)</li>
                <li class="my-4"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Entrega de fotografías en alta resolución y formatos optimizados para web</li>
            </ul>

        </div>

        <!-- Beneficios Clave -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bolt color-primary"></i>&nbsp;
                Beneficios Clave
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Imágenes de alta calidad que realzan su marca, producto o evento</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Material visual atractivo y profesional para marketing y comunicación</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Consistencia visual en todos sus canales</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Recuerdos duraderos y de calidad de momentos importantes</li>
            </ul>

        </div>

        <!-- Ideal Para -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bullseye color-primary"></i>&nbsp;
                Ideal Para
            </h4>

            <p class="fw-bold text-muted my-3">
                Empresas, emprendedores, tiendas online, organizadores de eventos, 
                agencias de publicidad y particulares 
                que necesiten fotografía de alta calidad para diversos fines.
            </p>

        </div>

        <!-- Entregables Tipicos -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-box color-primary"></i>&nbsp;
                Entregables Típicos
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Galería online privada con las fotografías seleccionadas</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos digitales en alta resolución (JPG/TIFF)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos optimizados para uso web y redes sociales</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Licencia de uso según acuerdo</li>
            </ul>

        </div>

        <!-- Footer Servicio -->
         <div class="col-lg-12 col-md-12 col-sm-12 text-center my-5 bg-light-accent p-4 rounded-4">
            
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