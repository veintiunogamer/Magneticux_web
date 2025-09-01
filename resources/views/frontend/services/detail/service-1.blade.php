@extends('frontend.layouts.main')

@section('title', 'Producion Video Corporativo')

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
                    <i class="fas fa-film me-1"></i> Video Corporativo
                </li>

            </ol>

        </div>

        <br><br>

        <!-- Header -->
        <div class="col-lg-12 col-md-12 col-sm-12 text-center slide-right-anim">

            <i class="fa fa-film fa-3x my-2 color-primary"></i>
            <h2 class="card-title my-3 fw-bold">Producción de Video Corporativo</h2>

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
         <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4 slide-right-anim">

            <h4 class="fw-bold">
                <i class="fa fa-circle-info color-primary"></i>&nbsp;
                Descripción General
            </h4>

            <p class="fw-bold my-3">
                Nuestro servicio de producción de video corporativo abarca todo el ciclo de 
                vida del proyecto. Comenzamos con una consulta para entender sus objetivos, 
                desarrollamos un guion creativo, planificamos la producción, grabamos 
                con equipo profesional y finalizamos con una postproducción detallada 
                que incluye edición, corrección de color, sonido y gráficos. Ideal para 
                presentaciones de empresa, videos promocionales, testimoniales y contenido 
                para redes sociales.
            </p>

        </div>

        <!-- Que Incluye -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4 slide-right-anim">

            <h4 class="fw-bold">
                <i class="fa fa-list-check color-primary"></i>&nbsp;
                ¿Qué Incluye?
            </h4>

            <ul class="fa-ul my-4">
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Consulta inicial y definición de objetivos</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Desarrollo de guion y storyboard</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Planificación de producción y logística</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Rodaje con equipo profesional (cámaras, iluminación, sonido)</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Edición de video y montaje</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Corrección de color y etalonaje</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Diseño de sonido y mezcla de audio</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Inclusión de gráficos y animaciones (si aplica)</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Entrega en formatos optimizados para web y redes sociales</li>
            </ul>

        </div>

        <!-- Beneficios Clave -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4 slide-right-anim">

            <h4 class="fw-bold">
                <i class="fa fa-bolt color-primary"></i>&nbsp;
                Beneficios Clave
            </h4>

            <ul class="fa-ul my-4">
                <li class="mb-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Comunicación efectiva de mensajes clave</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Mejora de la imagen y credibilidad de marca</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Aumento del engagement y alcance online</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-shield-halved text-primary"></i></span>Material versátil para marketing y ventas</li>
            </ul>

        </div>

        <!-- Ideal Para -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4 slide-right-anim">

            <h4 class="fw-bold">
                <i class="fa fa-bullseye color-primary"></i>&nbsp;
                Ideal Para
            </h4>

            <p class="fw-bold text-muted my-3">
                Empresas de todos los tamaños, startups, instituciones y 
                organizaciones que deseen mejorar su comunicación audiovisual 
                y presencia online.
            </p>

        </div>

        <!-- Entregables Tipicos -->
        <div class="col-lg-12 col-md-12 col-sm-12 border-grey p-4 my-5 rounded-4 slide-right-anim">

            <h4 class="fw-bold">
                <i class="fa fa-box color-primary"></i>&nbsp;
                Entregables Típicos
            </h4>

            <ul class="fa-ul my-4">
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Video final en alta resolución (Full HD o 4K)</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Versiones cortas o adaptadas para redes sociales (opcional)</li>
                <li class="mb-3"><span class="fa-li"><i class="fas fa-circle-check text-success"></i></span>Archivos fuente del proyecto (bajo acuerdo)</li>
            </ul>

        </div>

        <!-- Footer Servicio -->
         <div class="col-lg-12 col-md-12 col-sm-12 text-center bg-light-accent p-4 rounded-4 my-5 slide-right-anim">
            
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