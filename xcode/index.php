<?php
header('Content-Type: text/html; charset=utf-8');

$link = $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
$linkx = $_SERVER[REQUEST_URI];


$escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');

echo '<a href="'.$escaped_link.'">'.$escaped_link.'</a>';

echo '<a href="'.$links.'">'.links.'</a>';

?>