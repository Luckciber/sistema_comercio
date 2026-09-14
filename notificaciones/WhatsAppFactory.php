<?php

require_once "NotificacionFactory.php";
require_once "WhatsAppNotificacion.php";

class WhatsAppFactory extends NotificacionFactory
{
    public function crearNotificacion(): Notificacion
    {
        return new WhatsAppNotificacion();
    }
}