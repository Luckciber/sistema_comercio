<?php

require_once "NotificacionFactory.php";
require_once "EmailNotificacion.php";

class EmailFactory extends NotificacionFactory
{
    public function crearNotificacion(): Notificacion
    {
        return new EmailNotificacion();
    }
}
?>