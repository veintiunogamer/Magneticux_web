<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Magnetic UX')</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Font Awesome 6.5.2 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Bootstrap 5.3.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">

    </head>

    <body>

        <header>
            @include('frontend.layouts.header')
        </header>

        <main role="main">
            @yield('content')
        </main>

        <footer>
            @include('frontend.layouts.footer')
        </footer>

    </body>

    <!-- Bootstrap 5.3.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>
    
    <!-- GSAP 3.12.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- GSAP ScrollTrigger 3.12.2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    
</html>