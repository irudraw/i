<?php
header('Content-Type: image/png');

$filename = $_GET["file"];
$width = $_GET["w"];


$file_info = getimagesize($filename); 
// Obtenemos la relación de aspecto 
$ratio = $file_info[0] / $file_info[1]; 

// Calculamos las nuevas dimensiones 
$newWidth = $width; 
$newHeight = round($newWidth / $ratio); 
 

//$newWidth = 200;
//$newHeight = 200;

//$imageInfo = getimagesize($filename);

$image = imagecreatefrompng($filename); //create source image resource
imagesavealpha($image, true); //saving transparency

$newImg = imagecreatetruecolor($newWidth, $newHeight); //creating conteiner for new image
imagealphablending($newImg, false);
imagesavealpha($newImg,true);
$transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127); //seting transparent background
imagefilledrectangle($newImg, 0, 0, $newWidth, $newHeight, $transparent);
imagecopyresampled($newImg, $image, 0, 0, 0, 0, $newWidth, $newHeight,  $imageInfo[0], $imageInfo[1]);

imagepng($newImg); //printout image string
?>
