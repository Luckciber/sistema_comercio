<?php

require_once "EmailFactory.php";
require_once "SMSFactory.php";
require_once "WhatsAppFactory.php";

$emailFactory = new EmailFactory();
$email = $emailFactory->crearNotificacion();
$email->enviar("ronald@gmail.com", "Hola esta es una notificacion por correo. ");

$smsFactory = new SMSFactory();
$sms = $smsFactory->crearNotificacion();
$sms->enviar("56912345678", "Hola esta es una notificacion por SMS");

$whatsappFactory = new WhatsAppFactory();
$whatsapp = $whatsappFactory->crearNotificacion();
$whatsapp->enviar("+56912345678", "Hola esta es una notificacion por WhatsApp");
?>