
<nav class="col-12">
    
    <!-- Logo -->
    <div class="col-lg-6 col-md-6 col-sm-8">   

        <a href="{{ url('/') }}">
            <img src="{{ Vite::asset('resources/images/E21.png') }}" 
            alt="Enfoque 21" class="header_logo">
        </a>


    </div>

    <!-- Validacion para boton home - inicio -->
    @if (!in_array(request()->path(), ['/', '/home']))

        <div class="col-lg-6 col-md-6 col-sm-8 text-end">

            <a href="{{ url('/') }}" class="btn btn-primary me-4">
                <i class="fa fa-home"></i>&nbsp;
                Volver al inicio
            </a>

        </div>

    @endif
    
</nav>