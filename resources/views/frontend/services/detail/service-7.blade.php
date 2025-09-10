@extends('frontend.layouts.main')

@section('title', 'Desarrollo Movil')

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
                    <i class="fas fa-mobile-alt me-1"></i> Desarrollo Movil
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

            <h1 class="card-title my-3 fw-bold color-primary d-flex align-items-center">
                <span class="service-icon-circle mb-3 mt-2 me-4">
                    <i class="fa fa-mobile-alt"></i>
                </span>
                Desarrollo Movil
            </h1>

        </div>

        <!-- Descripcion general -->
         <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-circle-info color-primary"></i>&nbsp;
                Descripción General
            </h4>

            <p class="fw-bold my-3">
                Transformamos tus ideas en aplicaciones funcionales, intuitivas y atractivas. 
                Desarrollamos aplicaciones móviles nativas para iOS y Android, aplicaciones 
                híbridas, así como aplicaciones web progresivas (PWA) y plataformas web complejas. 
                Nuestro proceso incluye consultoría estratégica, diseño de interfaz y experiencia 
                de usuario (UI/UX), desarrollo ágil, pruebas exhaustivas en múltiples dispositivos 
                y soporte post-lanzamiento para asegurar el éxito de tu aplicación.
            </p>

        </div>

        <!-- Que Incluye -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-list-check color-primary"></i>&nbsp;
                ¿Qué Incluye?
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Consultoría y definición de alcance del proyecto</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Diseño UI/UX (wireframes, prototipos, diseño visual)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Desarrollo nativo para iOS (Swift/Objective-C) y Android (Kotlin/Java)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Desarrollo de aplicaciones web (React, Angular, Vue, Node.js, etc.)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Desarrollo de APIs y backend robusto</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Integración con servicios de terceros</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Pruebas de calidad (QA) y depuración</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Publicación en App Store y Google Play Store (para apps móviles)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Mantenimiento y evolución de la aplicación</li>
            </ul>

        </div>

        <!-- Beneficios Clave -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bolt color-primary"></i>&nbsp;
                Beneficios Clave
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Soluciones digitales a medida para tus necesidades específicas</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Experiencia de usuario optimizada para engagement y retención</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Aplicaciones escalables y de alto rendimiento</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Posibilidad de alcanzar a tu audiencia en múltiples plataformas</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Innovación y diferenciación en tu sector</li>
            </ul>

        </div>

        <!-- Ideal Para -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-bullseye color-primary"></i>&nbsp;
                Ideal Para
            </h4>

            <p class="fw-bold text-muted my-3">
                Startups, empresas que buscan digitalizar procesos, emprendedores con ideas 
                innovadoras, y organizaciones que quieren ofrecer nuevos servicios a través 
                de aplicaciones móviles o web.
            </p>

        </div>

        <!-- Entregables Tipicos -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4">

            <h4 class="fw-bold">
                <i class="fa fa-box color-primary"></i>&nbsp;
                Entregables Típicos
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Aplicación móvil compilada (IPA para iOS, APK para Android)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Aplicación web desplegada</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Código fuente completo (bajo acuerdo)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Documentación técnica y de usuario</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Soporte técnico post-lanzamiento</li>
            </ul>

        </div>

        <!-- Footer Servicio -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center p-4 my-5 slide-right-anim">
            
            <h2 class="fw-bold my-4 color-primary">
                ¿Listo para crear algo memorable?
            </h2>

            <p class="my-4">
                Para solicitar este servicio, por favor diligencia el formulario a continuación y
                uno de nuestros asesores se pondrá en contacto contigo a la brevedad.
            </p>

            <a href="#" class="btn btn-primary btn-lg my-5">Hablemos de tu proyecto</a>

        </div>

    </div>

@endsection