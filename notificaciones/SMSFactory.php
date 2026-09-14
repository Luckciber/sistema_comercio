<?php

require_once "NotificacionFactory.php";
require_once "SMSNotificacion.php";

class SMSFactory extends NotificacionFactory
{
    public function crearNotificacion(): Notificacion
    {
        return new SMSNotificacion();
    }
}
?>