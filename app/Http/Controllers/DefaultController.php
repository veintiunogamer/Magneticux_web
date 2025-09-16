<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController
{

    /**
     * Muestra la vista correspondiente al detalle de un servicio específico del frontend.
     *
     * Esta función recibe un parámetro `service_name` y, según su valor,
     * renderiza la vista correspondiente ubicada en:
     * resources/views/frontend/services/detail/service-X.blade.php
     *
     * @param  string  $service_name  Nombre del servicio recibido desde la URL (ej. 'service-1')
     * @return \Illuminate\View\View|\Illuminate\Http\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException Si el servicio no existe.
    */
    public function serviceDetail($service_name) {

        $whatsappNumber = config('services.whatsapp.number');
        $message = "¡Hola! Estoy interesado en tus servicios.";

        switch ($service_name) {

            case 'service-1':
    
                // Servicio - Producción de Video Corporativo
                return view('frontend.services.detail.service-1', compact('whatsappNumber', 'message'));

            case 'service-2':
                
                // Servicio - Fotografía Profesional
                return view('frontend.services.detail.service-2', compact('whatsappNumber', 'message'));

            case 'service-3':
                
                // Servicio - Grabación y Edición de Audio
                return view('frontend.services.detail.service-3', compact('whatsappNumber', 'message'));

            case 'service-4':
                
                // Servicio - Postproducción Audiovisual
                return view('frontend.services.detail.service-4', compact('whatsappNumber', 'message'));

            case 'service-5':
                
                // Servicio - Diseño Gráfico y Branding
                return view('frontend.services.detail.service-5', compact('whatsappNumber', 'message'));

            case 'service-6':
                
                // Servicio - Desarrollo Web Completo
                return view('frontend.services.detail.service-6', compact('whatsappNumber', 'message'));

            case 'service-7':
                
                // Servicio - Desarrollo Movil
                return view('frontend.services.detail.service-7', compact('whatsappNumber', 'message'));

            case 'service-8':
                
                // Servicio - Consultoría Audiovisual y Digital
                return view('frontend.services.detail.service-8', compact('whatsappNumber', 'message'));

            case 'service-9':
                
                // Servicio - Streaming y Eventos en Vivo
                return view('frontend.services.detail.service-9', compact('whatsappNumber', 'message'));

            default:

                abort(404); // o podrías redirigir a una página de error personalizada
        }

    }

}
