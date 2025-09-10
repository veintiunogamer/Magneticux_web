@extends('frontend.layouts.main')

@section('title', 'Edicion de Audio')

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
                    <i class="fas fa-microphone me-1"></i> Grabación y Edición de Audio
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

            <h1 class="card-title my-3 fw-bold color-primary d-flex align-items-center">
                <span class="service-icon-circle mb-3 mt-2 me-4">
                    <i class="fa fa-microphone"></i>
                </span>
                Grabación y Edición de Audio
            </h1>

        </div>

        <!-- Descripcion general -->
         <div class="col-lg-12 col-md-12 col-sm-12 p-4">


            <p class="fs-5">
                Nos especializamos en la grabación y edición de audio para podcasts, 
                locuciones profesionales (voice-overs), audiolibros, 
                jingles publicitarios y música incidental. Contamos con un estudio 
                equipado y técnicos de sonido para capturar audio de alta fidelidad. 
                Nuestro equipo de edición se encarga de limpiar, mezclar y masterizar 
                sus pistas, asegurando un producto final claro, profesional y listo para 
                su distribución.
            </p>

        </div>

        <!-- Que Incluye -->
        <div class="col-lg-12 col-md-12 col-sm-12 p-4">

            <h4 class="fw-bold">
                ¿Qué incluye el servicio?
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Grabación de voz en estudio o en localización (según proyecto)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Edición de audio (eliminación de ruidos, errores, silencios)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Mezcla de múltiples pistas (voces, música, efectos)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Masterización para optimizar la calidad y volumen final</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Creación y edición de podcasts completos</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Servicio de locución profesional en varios idiomas/acentos (bajo demanda)</li>
            </ul>

        </div>


        <!-- Entregables Tipicos -->
        <div class="col-lg-12 col-md-12 col-sm-12 p-4">

            <h4 class="fw-bold">
                Entregables Típicos
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos de audio en formatos estándar (MP3, WAV, etc.)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Episodios de podcast editados y listos para publicar</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Pistas de locución sincronizadas (si aplica)</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos de proyecto (bajo acuerdo)</li>
            </ul>

        </div>

        <!-- Beneficios Clave -->
        <div class="col-lg-12 col-md-12 col-sm-12 p-4 mt-5 bg-card-dark rounded-4">

            <h4 class="fw-bold">
                Beneficios Clave
            </h4>

            <ul class="fa-ul my-5">
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Audio claro, nítido y profesional</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Mejora la experiencia del oyente en podcasts y audiolibros</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Locuciones que transmiten el mensaje de forma efectiva</li>
                <li class="my-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Producción de audio que cumple con estándares de la industria</li>
            </ul>

        </div>

        <!-- Ideal Para -->
        <div class="col-lg-12 col-md-12 col-sm-12 p-4 mt-5 bg-card-dark rounded-4">

            <h4 class="fw-bold">
                Ideal Para
            </h4>

            <p class="my-3">
                Creadores de podcasts, empresas que necesitan locuciones para 
                videos o IVR, autores de audiolibros, músicos, agencias de publicidad.
            </p>

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