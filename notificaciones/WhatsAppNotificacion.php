<?php

class WhatsAppNotificacion implements Notificacion
{
    public function enviar($destinatario, $mensaje)
    {
        echo "°--   NOTIFICACIÓN POR WHATSAPP  --°<br>";
        echo "Destinatario: " . $destinatario . "<br>";
        echo "Mensaje: " . $mensaje . "<br>";
    }
} 