<?php
require_once "Notificacion.php";

class SMSNotificacion implements Notificacion
{
    public function enviar($destinario, $mensaje)
    {
        echo "°--  Notificacion por SMS  --°<br>";
        echo "Destinatario: " . $destinario . "<br>";
        echo "Mensaje " . $mensaje . "<br><br>";

    }
}
?>