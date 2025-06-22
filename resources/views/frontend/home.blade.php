@extends('frontend.layouts.main')

@section('title', 'Inicio - Enfoque 21')

@section('content')

    <!-- Cabecera -->
    <section class="col-12 text-center home_header_section slide-right-anim">

        <p class="display-3 fw-bold">Enfoque 21</p>
        <p class="my-2 fs-4 text-secondary">
           En Enfoque 21, transformamos ideas en experiencias audiovisuales 
           impactantes y estrategias digitales efectivas.
        </p>

        <a class="btn btn-primary btn-lg p-3 col-lg-4 col-md-4 col-sm-8 my-5" href="{{ url('/services') }}" role="button">
            Descubre nuestros servicios
        </a>

    </section>


    <!-- Lo que hacemos mejor -->
    <div class="container my-5 home_portal_section slide-right-anim">

        <div class="col-12 text-center p-2 mb-4 mt-5">
            <p class="display-5 fw-bolder upper my-3">Lo que hacemos mejor</p>
            <p class="fs-5 text-secondary">Desde la concepción hasta la entrega, ofrecemos soluciones integrales para destacar tu marca.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column align-items-center">

                        <span class="rounded-circle bg-grey p-4">    
                            <i class="fa fa-video fa-3x"></i>
                        </span>

                        <h4 class="card-title my-3 fw-bold">Producción Audiovisual</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Videos corporativos, spots, y más, con calidad cinematográfica.
                        </p>
                    
                    </div>

                </div>

            </div>

            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column align-items-center">

                        <span class="rounded-circle bg-grey p-4">
                            <i class="fa fa-chart-line fa-3x"></i>
                        </span>

                        <h4 class="card-title my-3 fw-bold">Marketing Digital</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Estrategias SEO, SEM, redes sociales para impulsar tu marca.
                        </p>
                        
                    
                    </div>

                </div>

            </div>

            <div class="col zoom-hover">

                <div class="card h-100 shadow-sm text-center rounded-4">

                    <div class="card-body d-flex flex-column align-items-center">

                        <span class="rounded-circle bg-grey p-4">
                            <i class="fa fa-code fa-3x"></i>
                        </span>

                        <h4 class="card-title my-3 fw-bold">Soluciones Web y Apps</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Diseño y desarrollo de sitios web y aplicaciones a medida.
                        </p>
                        
                    
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Portal de acceso -->
    <div class="container my-5 home_portal_section slide-right-anim">

        <div class="col-12 text-center p-2 mb-4 mt-5">
            <p class="display-5 fw-bolder upper my-3">Portal de Acceso</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">

                <div class="card h-100 shadow-sm text-center">

                    <div class="card-body d-flex flex-column align-items-center">

                        <span class="rounded-circle bg-light-accent p-4">
                            <i class="fa fa-briefcase color-primary fa-3x"></i>
                        </span>

                        <h4 class="card-title my-3 fw-bold">Servicios y Paquetes</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Explora nuestros servicios audiovisuales, digitales y paquetes de marketing integrados
                        </p>
                        
                        <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg mt-auto">
                            Ver Servicios & Paquetes
                        </a>
                    
                    </div>

                </div>

            </div>

            <div class="col">

                <div class="card h-100 shadow-sm text-center">

                    <div class="card-body d-flex flex-column align-items-center">

                        <span class="rounded-circle bg-light-accent p-4">    
                            <i class="fa fa-check color-primary fa-3x"></i>
                        </span>

                        <h4 class="card-title my-3 fw-bold">Acceso a Afiliados</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Locutorios y socios, gestionen sus solicitudes y comisiones
                        </p>
                        
                        <a href="#" class="btn btn-outline-primary btn-lg mt-auto">
                            Portal Afiliados
                        </a>
                    
                    </div>

                </div>

            </div>

            <div class="col">

                <div class="card h-100 shadow-sm text-center">

                    <div class="card-body d-flex flex-column align-items-center">

                        <span class="rounded-circle bg-light-accent p-4">
                            <i class="fa fa-user-gear color-primary fa-3x"></i>
                        </span>

                        <h4 class="card-title my-3 fw-bold">Acceso a Profesionales</h4>

                        <p class="card-text flex-grow-1 mb-5 mt-4">
                            Colaboradores, accedan a sus proyectos asignados y pagos
                        </p>
                        
                        <a href="#" class="btn btn-outline-primary btn-lg mt-auto">
                            Portal Profesionales
                        </a>
                    
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Listo para empezar -->
    <section class="col-12 text-center home_contact_section bg-dark slide-up-anim">

        <p class="display-5 fw-bolder upper my-3 text-white">Listo para empezar</p>
        <p class="fs-5 text-secondary text-white">
            Hablemos sobre tu próximo proyecto y cómo podemos ayudarte a alcanzar tus metas.
        </p>

        <a href="#" class="btn btn-secondary col-lg-4 col-md-4 col-sm-8 p-3 btn-lg my-5 text-white" role="button">Contacta con nosotros</a>

    </section>

@endsection
