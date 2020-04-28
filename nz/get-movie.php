<?php
/*********************************************
* Author: (c) 2019 frans185 - www.frans.moe
*********************************************/

// Configuracion
$mydomain = 'zanime.herokuapp.com';
$error_message = '¿Qué pasó amiguito?';

// Validar que exista el referer y la url encriptada
if(!isset($_SERVER['HTTP_REFERER']) || !isset($_GET['c'])){
	die($error_message);
}

// Habilitar solo visitas desde nuestro dominio
$ref = $_SERVER['HTTP_REFERER'];
$refData = parse_url($ref);
if($refData['host'] !== $mydomain) {
  die($error_message);
}

// Desencriptar la url del iframe
require_once('core/inter.php');
$location = $_GET['c'];
$location = FJCrypter::decrypt($location);

// Redirigir a la url encriptada
header('Location: '.$location);
