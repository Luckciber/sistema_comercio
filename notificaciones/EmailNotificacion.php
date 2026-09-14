<?php

require_once "Notificacion.php";

class EmailNotificacion implements Notificacion
{
    public function enviar($destinatario, $mensaje)
    {
        echo "°--   NOTIFICACIÓN POR EMAIL   --°<br>";
        echo "Destinatario: " . $destinatario . "<br>";
        echo "Mensaje: " . $mensaje . "<br><br>";
    }
}

?>